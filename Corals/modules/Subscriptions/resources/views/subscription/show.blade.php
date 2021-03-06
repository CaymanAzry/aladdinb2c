@extends('layouts.crud.show')

@section('content_header')
    @component('components.content_header')
        @slot('page_title')
            {{ $title_singular }}
        @endslot

        @slot('breadcrumb')
            {{ Breadcrumbs::render('subscription_show') }}
        @endslot
    @endcomponent
@endsection



@section('actions')
    @if (user()->hasPermissionTo('Payment::invoices.update'))
        {!! CoralsForm::link(url($resource_url.'/'.$subscription->hashed_id.'/create-invoice'),'Subscriptions::labels.subscription.create_invoice_label',['class'=>'btn btn-sm btn-primary']) !!}
    @endif
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            @component('components.box')
                @slot('box_title')
                    @lang('Subscriptions::labels.subscription.subscription_details')
                @endslot
                <div class="table-responsive">
                    <table class="table color-table info-table table table-hover table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>@lang('Subscriptions::attributes.subscription.subscription_reference')</th>
                            <th>@lang('Subscriptions::attributes.subscription.product_id')</th>
                            <th>@lang('Subscriptions::attributes.subscription.plan_id')</th>
                            <th>@lang('Subscriptions::attributes.subscription.gateway')</th>
                            <th>@lang('Subscriptions::attributes.subscription.user_id')</th>
                            <th>@lang('Corals::attributes.status')</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{!!   $subscription->presenter()['subscription_reference'] !!}</td>
                            <td>{!! $subscription->presenter()['product_id'] !!}</td>
                            <td>{!! $subscription->presenter()['plan_id'] !!}</td>
                            <td>{!! $subscription->presenter()['gateway'] !!}</td>
                            <td>{!! $subscription->presenter()['user_id'] !!}</td>
                            <td>{!! $subscription->presenter()['status'] !!}</td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            @endcomponent
            @component('components.box')
                @slot('box_title')
                    @lang('Subscriptions::labels.subscription.invoices')
                @endslot

                <div class="table-responsive">
                    <table class="dt-tables table color-table info-table table table-hover table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>@lang('Payment::attributes.invoice.invoice_date')</th>
                            <th>@lang('Payment::attributes.invoice.invoice_code')</th>
                            <th>@lang('Payment::attributes.invoice.due_date')</th>
                            <th>@lang('Payment::attributes.invoice.total')</th>
                            <th>@lang('Corals::attributes.status')</th>
                            <th>@lang('Corals::labels.action')</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($subscription->invoices as $invoice)

                            <tr id="tr_{{ $loop->index }}" data-index="{{ $loop->index }}">
                                <td>
                                    {!! $invoice->present('invoice_date') !!}
                                </td>
                                <td>
                                    {!! $invoice->present('code') !!}
                                </td>
                                <td>
                                    {!! $invoice->present('due_date') !!}
                                </td>
                                <td>
                                    {!! $invoice->present('total') !!}
                                </td>
                                <td>
                                    {!! $invoice->present('status') !!}
                                </td>
                                <td>
                                    {!! $invoice->present('action') !!}
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            @endcomponent
            @component('components.box')
                @slot('box_title')
                    @lang('Subscriptions::labels.subscription.subscription_cycles')
                @endslot

                <div class="table-responsive">
                    <table class="dt-tables table color-table info-table table table-hover table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>@lang('Subscriptions::attributes.subscription_cycle.starts_at')</th>
                            <th>@lang('Subscriptions::attributes.subscription_cycle.ends_at')</th>
                            <th>@lang('Corals::attributes.created_at')</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($subscription->cycles as $cycle)

                            <tr id="tr_{{ $loop->index }}" data-index="{{ $loop->index }}">
                                <td>
                                    {!! $cycle->present('starts_at') !!}
                                </td>
                                <td>
                                    {!! $cycle->present('ends_at') !!}
                                </td>
                                <td>
                                    {!! $cycle->present('created_at') !!}
                                </td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            @endcomponent
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    @component('components.box')
                        @slot('box_title')
                            @lang('Corals::labels.address_label.bill_address')
                        @endslot
                        <div class="table-responsive">
                            <table class="table color-table info-table table table-hover table-striped table-condensed">
                                <tbody>
                                @isset($subscription->billing_address)
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.address_one')</th>
                                        <td>{{ $subscription->billing_address['address_1'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.address_two')</th>
                                        <td>{{ $subscription->billing_address['address_2'] ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.city')</th>
                                        <td>{{ $subscription->billing_address['city'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.state')</th>
                                        <td>{{ $subscription->billing_address['state'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.zip')</th>
                                        <td>{{ $subscription->billing_address['zip'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.country')</th>
                                        <td>{{ $subscription->billing_address['country'] }}</td>
                                    </tr>
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    @endcomponent
                </div>
            </div>
            @if($subscription->shipping_address)
                <div class="row">
                    <div class="col-md-12">
                        @component('components.box')
                            @slot('box_title')
                                @lang('Corals::labels.address_label.shipping_title')
                            @endslot
                            <div class="table-responsive">
                                <table class="table color-table info-table table table-hover table-striped table-condensed">

                                    <tbody>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.address_one')</th>
                                        <td>{{ $subscription->shipping_address['address_1'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.address_two')</th>
                                        <td>{{ $subscription->shipping_address['address_2'] ?? '-'  }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.city')</th>
                                        <td>{{ $subscription->shipping_address['city'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.state')</th>
                                        <td>{{ $subscription->shipping_address['state'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.zip')</th>
                                        <td>{{ $subscription->shipping_address['zip'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Corals::labels.address_label.country')</th>
                                        <td>{{ $subscription->shipping_address['country'] }}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        @endcomponent
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript">
        $(document).ready(function () {
            $('.dt-tables').DataTable({});
        });
    </script>
@endsection
