<div id="review" class="tab-pane fade">
<div class="row">
    
        <div class="col-xs-12 col-xs-12 col-md-4 col-lg-4">
    
    @if(!user())
        <div class="alert alert-info alert-dismissible fade show text-center margin-bottom-1x"><span class="alert-close"
                                                                                                     data-dismiss="alert"></span><i
                    class="icon-layers"></i>@lang('corals-marketplace-pro::labels.partial.tabs.need_login_review')
        </div>
    @else
        {!! Form::open( ['url' => url('shop/'.$product->hashed_id.'/rate'),'method'=>'POST', 'class'=>'ajax-form row py-2','id'=>'checkoutForm','data-page_action'=>"site_reload"]) !!}
        <input type="hidden" name="review[rating]" value="3">
        <input type="hidden" name="product_id">
        <h3 class="spr-form-title">@lang('corals-marketplace-pro::labels.partial.tabs.leave_review')</h3>

        <fieldset class="spr-form-contact">
            <div class="spr-form-contact-name">
                {!! CoralsForm::text('review_subject','corals-marketplace-pro::attributes.tab.subject',true) !!}
            </div>
            <div class="spr-form-contact-email">
                {!! CoralsForm::select('review_rating', 'corals-marketplace-pro::attributes.tab.rating', trans('corals-marketplace-pro::attributes.tab.rating_option'),true) !!}
            </div>
        </fieldset>
        <fieldset>
            <div class="spr-form-review-body">
                <div class="spr-form-input">
                    {!! CoralsForm::textarea('review_text','corals-marketplace-pro::attributes.tab.review',true,null,['rows'=>4,'class'=>'spr-form-input-textarea']) !!}
                </div>
            </div>
        </fieldset>
        <div class="submit">
            <a style="background-color:#017340; color:white; border-radius:10px;" class="submit">{!! CoralsForm::button('corals-marketplace-pro::labels.partial.tabs.submit_review',['class'=>'btn btn-success'], 'submit') !!}</a>
        </div>
        {!! Form::close() !!}
    @endif
</div>

<div class="col-md-2 col-lg-2" style="margin-top: 30xp"></div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top: 30xp">
    
    <div class="spr-form">
        @foreach($reviews as $review)
            <div class="user-comment">
                <div class="spr-review">
                    <div class="spr-review-header">
                    <span class="spr-review-header-byline">
                        <strong>{{ optional($review->author)->full_name }}</strong>
                        <span>{{ $review->title }}</span>
                    </span>
                        <div class="rating">
                            <div class="star-content">
                                @include('partials.components.rating',['rating'=> $review->rating,'rating_count'=>null ])
                            </div>
                        </div>
                    </div>
                    <div class="spr-review-content">
                        <p class="spr-review-content-body">
                            {{ $review->body }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div

</div
