{{-- deepak candidates list --}}
@php
    Theme::asset()->container('footer')->usePath()->add('candidates-filter', 'js/candidates-filter.js');
@endphp

<div class="container candidates-list">
    @if (is_plugin_active('ads'))
        {!! apply_filters('ads_render', null, 'candidate_list_before', ['class' => 'my-2 text-center']) !!}
    @endif

    <style>
        .box-list-character ul {
            margin: 0;
            width: 100%;
        }

        .box-list-character ul li {
            margin: 0;
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        .box-list-character .select2 {
            margin: 0;
            width: 100% !important;
        }

        .select2-container--default .select2-selection--multiple {
            min-height: 50px;
        }
        .select2-selection,
        .select2-search {
            border: 1px solid var(--border-color-2);
            border-radius: 4px;
            box-shadow: none;
            font-size: 14px;
            height: 50px;
            padding-left: 20px;
            width: 100%;
            padding: 0
        }

        .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
            list-style: none;
            max-width: 106px;
            height: 30px;
            display: flex;
            flex-direction: row-reverse;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__rendered {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            background: white;
            gap: 10px;
        }

        .select2-selection--multiple {
            height: auto;
        }
    </style>
    <form action="{{ route('public.ajax.candidates') }}" class="candidate-filter-form">
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-company">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__animated animate__fadeInUp">{!! BaseHelper::clean($shortcode->title) !!}</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".1s">{!! BaseHelper::clean($shortcode->description) !!}</div>
                        {{-- <div class="box-list-character">
                        <ul>
                            @foreach (range('a', 'z') as $char)
                                <li>
                                    <a href="javascript:void(0)" class="keyword @if (request()->query('keyword') == $char) active @endif" data-keyword="{{ $char }}">{{ $char }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}
                        <div class="box-list-character">
                            <ul>
                                <!-- Filter by Skill -->
                                <li>
                                    <label for="skill">Filter by Skill:</label>
                                    <select id="skillFiter" name="skill[]" class="skill" data-filter="skill"
                                        multiple="multiple">
                                        @foreach ($skills as $item)
                                            <option value="{{ $item->id }}"
                                                @if (is_array(request()->query('skill')) && in_array($item->id, request()->query('skill'))) selected @endif>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </li>

                                <!-- Filter by Job Title -->
                                <li>
                                    <label for="job_title">Filter by Job Title:</label>
                                    <input type="text" id="job_title" name="job_title" class="job_title"
                                        placeholder="Search by job title"
                                        value="{{ BaseHelper::stringify(request()->query('job_title')) }}"
                                        data-filter="job_title">
                                </li>

                                <!-- Filter by Experience -->
                                <li>
                                    <label for="experience">Filter by Experience (in years):</label>
                                    <select id="experience" name="experience" class="experience"
                                        data-filter="experience">
                                        <option value="">Select Experience</option>
                                        <option value="1" @if (request()->query('experience') == '1') selected @endif>1 Year
                                        </option>
                                        <option value="2" @if (request()->query('experience') == '2') selected @endif>2 Years
                                        </option>
                                        <option value="3" @if (request()->query('experience') == '3') selected @endif>3 Years
                                        </option>
                                        <option value="5" @if (request()->query('experience') == '5') selected @endif>5+
                                            Years</option>
                                    </select>
                                </li>

                                <!-- Filter by Education Level -->
                                <li>
                                    <label for="education">Filter by Education Level:</label>
                                    <select id="education" name="education" class="education" data-filter="education">
                                        <option value="">Select Education Level</option>
                                        @foreach ($degreeLevels as $item)
                                            <option value="{{ $item->id }}"
                                                @if (request()->query('education') == $item->id) selected @endif>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <input type="hidden" name="keyword" value="{{ BaseHelper::stringify(request()->query('keyword')) }}">
        <input type="hidden" name="per_page" value="{{ BaseHelper::stringify(request()->query('per_page', 12)) }}">
        <input type="hidden" name="sort_by" value="{{ BaseHelper::stringify(request()->query('sort_by', 'newest')) }}">
        <input type="hidden" name="page" value="{{ BaseHelper::stringify(request()->query('page', 1)) }}">
    </form>
    <section class="mt-30">
        <div class="container position-relative">
            <div class="content-page">
                {!! Theme::partial('loading') !!}
                <div class="box-filters-job">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5">
                            <span class="text-small text-showing">
                                {{ __('Showing :from-:to of :total candidate(s)', [
                                    'from' => $candidates->firstItem() ?: 0,
                                    'to' => $candidates->lastItem() ?: 0,
                                    'total' => $candidates->total(),
                                ]) }}
                            </span>
                        </div>
                        <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                            <div class="display-flex2">
                                <div class="box-border mr-10">
                                    <span class="text-sort_by">{{ __('Show') }}:</span>
                                    <div class="dropdown dropdown-sort">
                                        <button class="btn dropdown-toggle" id="dropdownSort" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                                            <span>{{ $candidates->perPage() }}</span>
                                            <i class="fi-rr-angle-small-down"></i>
                                        </button>
                                        <ul class="dropdown-menu js-dropdown-clickable dropdown-menu-light"
                                            aria-labelledby="dropdownSort">
                                            @foreach (JobBoardHelper::getPerPageParams() as $perPage)
                                                <li>
                                                    <a class="dropdown-item per-page"
                                                        data-per-page="{{ $perPage }}">{{ $perPage }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-border">
                                    @include(Theme::getThemeNamespace('views.job-board.partials.sort-by-dropdown'))
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row candidate-list">
                    @include(Theme::getThemeNamespace('views.job-board.partials.candidate-list'))
                </div>
            </div>
        </div>
    </section>

    @if (is_plugin_active('ads'))
        {!! apply_filters('ads_render', null, 'candidate_list_after', ['class' => 'my-2 text-center']) !!}
    @endif
</div>
