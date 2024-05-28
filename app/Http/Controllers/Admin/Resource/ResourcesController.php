<?php

namespace App\Http\Controllers\Admin\Resource;

use App\Helpers\FileUpload;
use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ResourcesController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.resources.index');
    }

    public function upload(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'url' => 'nullable|url|required_without:video',
            'video' => 'nullable|file|mimes:mp4,avi,mov|max:20480|required_without:url'
        ]);

        if ($validator->fails()) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'Please provide either a Video URL or Upload a Video.');
            return response()->json($response);
        }

        try {
            DB::beginTransaction();

            //Upload Video
            $upload_video = null;
            if ($video = $request->file('video')) {
                $upload_video = FileUpload::FileUpload($video, "resources-video");
            }

            if ($resourceUpdateVideo = Resource::where('added_by', auth()->user()->id)->first()) {
                $resourceUpdateVideo->video_url = $request->url ?? null;
                $resourceUpdateVideo->upload_video = $upload_video;
                $resourceUpdateVideo->save();
            } else {
                $resourceAddVideo = new Resource;
                $resourceAddVideo->video_url = $request->url ?? null;
                $resourceAddVideo->upload_video = $upload_video;
                $resourceAddVideo->added_by = auth()->user()->id;
                $resourceAddVideo->save();
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Resource video/url information save successfully.');
            Log::info('Successfully save the resource video/url information', ['added' => 'success' ?? '']);
            DB::commit();

            return redirect()->back()->with($response);
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to save the resource video/url information. Please try again later.');
            Log::info('The system is unable to save the resource video/url information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return redirect()->back()->with($response);
        }
    }

    public function preview(): \Illuminate\Http\JsonResponse
    {
        try {
            DB::beginTransaction();
            $videoInfo = Resource::where('added_by', auth()->user()->id)->first();
            $video = $videoInfo != null ? $videoInfo->getResourceVideo() : null;
            if ($video != null) {
                $renderData = '<video controls="" style="width: 100%">
                            <source src="' . $video . '">
                        </video>';
            } else {
                $renderData = '<h6 class="text-center">No Video found!</h6>';
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Resource video information get successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the resource video information', ['get' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the resource video information. Please try again later.');
            Log::info('The system is unable to get the resource video information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

}
