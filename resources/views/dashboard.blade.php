@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="pf-v6-c-page__main">
    <section class="pf-v6-c-page__main-section">
        <div id="dashboard" class="pf-v6-l-grid pf-m-gutter">
            <div class="pf-v6-l-grid__item pf-m-12-col pf-m-6-col-on-md pf-m-4-col-on-lg draggable-card">
                <div class="pf-v6-c-card">
                    <div class="pf-v6-c-card__header">
                        <span class="pf-v6-c-title pf-m-lg">Welcome, {{ Auth::user()->name }}</span>
                    </div>
                    <div class="pf-v6-c-card__body">
                        <p>This is the main dashboard. Use the sidebar to navigate through the system.</p>
                    </div>
                </div>
            </div>
            <div class="pf-v6-l-grid__item pf-m-12-col pf-m-6-col-on-md pf-m-4-col-on-lg draggable-card">
                <div class="pf-v6-c-card">
                    <div class="pf-v6-c-card__header">
                        <span class="pf-v6-c-title pf-m-lg">Card 2</span>
                    </div>
                    <div class="pf-v6-c-card__body">
                        <p>Content for Card 2. This card is draggable and resizable within the dashboard.</p>
                    </div>
                </div>
            </div>
            <div class="pf-v6-l-grid__item pf-m-12-col pf-m-6-col-on-md pf-m-4-col-on-lg draggable-card">
                <div class="pf-v6-c-card">
                    <div class="pf-v6-c-card__header">
                        <span class="pf-v6-c-title pf-m-lg">Card 3</span>
                    </div>
                    <div class="pf-v6-c-card__body">
                        <p>Content for Card 3. This card is draggable and resizable within the dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
