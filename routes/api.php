<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\XobinController;

Route::get('/assessments', [XobinController::class, 'listAssessments']);
Route::post('/invite', [XobinController::class, 'sendInvite']);
Route::get('/candidate/{candidateId}/score', [XobinController::class, 'getCandidateScore']);
Route::get('/assessment/{assessmentId}/candidates', [XobinController::class, 'listInvitedCandidates']);
Route::get('/live-test-takers', [XobinController::class, 'getLiveTestTakers']);