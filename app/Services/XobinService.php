<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class XobinService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.xobin.api_key', env('XOBIN_API_KEY'));
        $this->baseUrl = config('services.xobin.base_url', env('XOBIN_BASE_URL'));
        // dd($this->baseUrl);
    }

    /**
     * List All Assessments
     */
    public function listAssessments()
    {
        $url = "{$this->baseUrl}/{$this->apiKey}/assessment/get/assessments";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception($response->body());
    }

    /**
     * Send Assessment Invite
     */
    public function sendInvite($candidateEmail, $candidateName, $assessmentId)
    {
        $url = "{$this->baseUrl}/{$this->apiKey}/assessment/send/invite/{$candidateEmail}/{$candidateName}/getlink/{$assessmentId}";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception($response->body());
    }

    /**
     * Get Candidate Score
     */
    public function getCandidateScore($candidateId)
    {
        $url = "{$this->baseUrl}/{$this->apiKey}/assessment/get/report/{$candidateId}";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception($response->body());
    }

    /**
     * List Invited Candidates
     */
    public function listInvitedCandidates($assessmentId)
    {
        $url = "{$this->baseUrl}/{$this->apiKey}/assessment/get/candidates/{$assessmentId}";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception($response->body());
    }

    /**
     * Get Count of Live Test-Takers
     */
    public function getLiveTestTakers()
    {
        $url = "{$this->baseUrl}/{$this->apiKey}/assessment/get/live";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception($response->body());
    }
}