<?php

namespace App\Services;


use App\Mail\SubmissionStatusUpdate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Submission;
use App\Models\SubmissionFile;
use App\Models\SubmissionStatusHistory;

class SubmissionService
{

    public static function getSubmissionStatus(int $status): string
    {
        switch ($status) {
            case 0:
                return "Pending";
            case 1:
                return "Approved";
            case 2:
                return "Rejected";
            default:
                return "Unknown";
        }
    }

    public static function getSubmissionStage(int $stage): string
    {
        switch ($stage) {
            case 0:
                return "Initial QA";
            case 1:
                return "APC";
            case 2:
                return "Peer Reviewed";
            case 3:
                return "Publication";
            default:
                return "Unknown";
        }
    }
}
