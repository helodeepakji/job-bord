@php
    Theme::asset()->container('footer')->add('location-js', asset('vendor/core/plugins/location/js/location.js'), ['jquery']);
@endphp

@extends(Theme::getThemeNamespace('views.job-board.account.partials.layout-settings'))
{{-- deepak assessment --}}
@section('content')
    <h3 class="mt-0 mb-15 color-brand-1">{{ __('My Assessment') }}</h3>
    <div class="row">
        @if (!empty($assessments) && count($assessments) > 0)
            @foreach ($assessments as $assessment)
                <div class="col-md-4 mb-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">{{ $assessment['assessment_name'] }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Assessment ID:</strong> {{ $assessment['assessment_id'] }}</p>
                            <a href="{{ route('public.account.assessment.details', ['id' => $assessment['assessment_id']]) }}" class="btn btn-outline-primary">
                                {{ __('View Details') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="alert alert-warning">
                    {{ __('No assessments available at the moment.') }}
                </div>
            </div>
        @endif
    </div>
@endsection
