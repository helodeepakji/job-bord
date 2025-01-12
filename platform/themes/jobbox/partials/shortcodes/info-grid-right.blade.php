<div class="container py-5">
    <div class="row align-items-center">        
        <!-- Content Column -->
        <div class="col-md-6 deepak-ui">
            <h2>{!! BaseHelper::clean($shortcode->title ?? 'Default Title') !!}</h2>
            <ul class="list-unstyled">
                <li class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                    <div>
                        <h5 class="mb-1">{!! BaseHelper::clean($shortcode->item1_title ?? 'Default Item 1') !!}</h5>
                        <p class="mb-0 text-muted">{!! BaseHelper::clean($shortcode->item1_description ?? 'Default description for item 1') !!}</p>
                    </div>
                </li>
                <li class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                    <div>
                        <h5 class="mb-1">{!! BaseHelper::clean($shortcode->item2_title ?? 'Default Item 2') !!}</h5>
                        <p class="mb-0 text-muted">{!! BaseHelper::clean($shortcode->item2_description ?? 'Default description for item 2') !!}</p>
                    </div>
                </li>
                <li class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                    <div>
                        <h5 class="mb-1">{!! BaseHelper::clean($shortcode->item3_title ?? 'Default Item 3') !!}</h5>
                        <p class="mb-0 text-muted">{!! BaseHelper::clean($shortcode->item3_description ?? 'Default description for item 3') !!}</p>
                    </div>
                </li>
            </ul>
        </div>
         <!-- Image Column -->
        <div class="col-md-6 text-center">
            <div class="bg-primary d-flex justify-content-center align-items-center" style="height: 300px; border-radius: 8px;">
                <img class="bi bi-image"  src="{{ RvMedia::getImageUrl($shortcode->image) }}" alt="{{__('Hero Image')}}">
            </div>
        </div>
    </div>
</div>