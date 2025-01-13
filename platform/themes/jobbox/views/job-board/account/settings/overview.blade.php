<div class="col-lg-12">
    <div class="card profile-content-page mt-4 mt-lg-0">
        <ul class="profile-content-nav nav nav-pills border-bottom mb-4" id="pills-tab"
            role="tablist">
            <li class="nav-item" role="presentation">
                <h3 class="mt-0 mb-15 mt-15 color-brand-1">{{ __('Overview') }}</h3>
            </li>
        </ul>
        <div class="card-body p-4">
            <div class="tab-content" id="pills-tabContent">
                <h5 class="fs-18 fw-bold">{{ __('About') }}</h5>
                <p class="text-muted mt-4">{!! BaseHelper::clean($account->description) !!}</p>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <h5 class="fs-18 fw-bold">Assessment</h5>
                <style>
                    .score-list {
                        max-width: 800px;
                        margin: 2rem auto;
                        padding: 0 1rem;
                    }

                    .score-item {
                        margin-bottom: 3rem;
                    }

                    .score-item__header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 0.75rem;
                    }

                    .score-item__label {
                        font-size: 1.5rem;
                        font-weight: 400;
                        margin: 0;
                    }

                    .score-item__value {
                        font-size: 2rem;
                        font-weight: 500;
                        margin: 0;
                    }

                    .score-item__progress {
                        height: 8px;
                        background-color: #e9ecef;
                        border-radius: 4px;
                        overflow: hidden;
                    }

                    .score-item__bar {
                        height: 100%;
                        background: linear-gradient(90deg, #00c6ff 0%, #0072ff 100%);
                        border-radius: 4px;
                        transition: width 0.6s ease;
                    }

                    @media (max-width: 576px) {
                        .score-item__label {
                            font-size: 1.25rem;
                        }

                        .score-item__value {
                            font-size: 1.5rem;
                        }
                    }
                </style>
                <div class="score-list">
                    @foreach ($scoreAssessment as $item)
                        <div class="score-item">
                            <div class="score-item__header">
                                <h2 class="score-item__label">{{ $item->name }}</h2>
                                <div class="score-item__value">{{ $item->score }}</div>
                            </div>
                            <div class="score-item__progress">
                                <div class="score-item__bar" style="width: {{ $item->score }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
