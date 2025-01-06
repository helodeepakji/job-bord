<?php

namespace App\Http\Controllers;

use App\Services\XobinService;
use Illuminate\Http\Request;

class XobinController extends Controller
{
    protected $xobinService;

    public function __construct(XobinService $xobinService)
    {
        $this->xobinService = $xobinService;
    }

    public function listAssessments()
    {
        try {
            $assessments = $this->xobinService->listAssessments();
            return response()->json($assessments);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function sendInvite(Request $request)
    {
        try {
            $invite = $this->xobinService->sendInvite(
                $request->candidate_email,
                $request->candidate_name,
                $request->assessment_id
            );
            return response()->json($invite);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getCandidateScore($candidateId)
    {
        try {
            $score = $this->xobinService->getCandidateScore($candidateId);
            return response()->json($score);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function listInvitedCandidates($assessmentId)
    {
        try {
            $candidates = $this->xobinService->listInvitedCandidates($assessmentId);
            return response()->json($candidates);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getLiveTestTakers()
    {
        try {
            $liveTakers = $this->xobinService->getLiveTestTakers();
            return response()->json($liveTakers);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
