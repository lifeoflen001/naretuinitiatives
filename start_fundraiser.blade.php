@extends('layouts.main')

@section('title', 'Start Fundraising - Naretu Initiatives')

@push('styles')
<style>
    /* Compact Comments Section */
    .comment-one {
        margin-top: 40px;
    }
    
    .comment-one__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        flex-wrap: wrap;
        gap: 10px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    
    .comment-one__title {
        font-size: 18px;
        margin: 0;
        font-weight: 600;
    }
    
    .comment-sort select {
        padding: 6px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background: white;
        cursor: pointer;
        font-size: 13px;
    }
    
    /* Compact Comment Item */
    .comment-one__single {
        position: relative;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        gap: 12px;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .comment-one__single.unsent {
        opacity: 0;
        transform: translateX(-100%);
        pointer-events: none;
    }
    
    .comment-one__single.hidden-comment {
        display: none;
    }
    
    /* Small Profile Image */
    .comment-one__image {
        flex-shrink: 0;
    }
    
    .comment-one__image img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    .comment-one__content {
        flex: 1;
        min-width: 0;
    }
    
    .comment-one__meta {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 6px;
        flex-wrap: wrap;
    }
    
    .comment-one__meta h3 {
        font-size: 14px;
        font-weight: 600;
        margin: 0;
        color: #333;
    }
    
    .comment-date {
        color: #888;
        font-size: 12px;
    }
    
    .unsend-timer {
        color: #e36955;
        font-size: 11px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }
    
    .unsend-btn {
        background: #ffebee;
        color: #c62828;
        border: none;
        padding: 3px 10px;
        font-size: 11px;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 8px;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }
    
    .unsend-btn:hover {
        background: #ef9a9a;
    }
    
    .unsend-btn i {
        font-size: 10px;
    }
    
    .comment-one__content > p {
        font-size: 13px;
        line-height: 1.5;
        color: #555;
        margin-bottom: 8px;
    }
    
    /* Compact Reply Button */
    .reply-btn {
        padding: 4px 10px;
        font-size: 11px;
        border-radius: 4px;
        margin-top: 0;
    }
    
    .reply-btn i {
        font-size: 11px;
        margin-right: 4px;
    }
    
    /* Compact Reply Form */
    .reply-form-wrapper {
        margin-top: 12px;
        padding: 12px;
        background: #f9f9f9;
        border-radius: 6px;
        animation: slideDown 0.3s ease;
    }
    
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .reply-form input,
    .reply-form textarea {
        width: 100%;
        padding: 8px 10px;
        margin-bottom: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 13px;
    }
    
    .reply-form textarea {
        min-height: 60px;
        resize: vertical;
    }
    
    .reply-form-actions {
        display: flex;
        gap: 8px;
    }
    
    .reply-form-actions .thm-btn {
        padding: 6px 14px;
        font-size: 12px;
    }
    
    /* Nested Replies - Indented */
    .comment-replies {
        margin-top: 12px;
        margin-left: 0;
        padding-left: 15px;
        border-left: 2px solid #e36955;
    }
    
    .reply-item {
        background: #fafafa;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 10px;
        display: flex;
        gap: 8px;
    }
    
    .reply-item .comment-one__image img {
        width: 35px;
        height: 35px;
    }
    
    .reply-item .comment-one__meta h3 {
        font-size: 13px;
    }
    
    .reply-item p {
        font-size: 12px;
        margin-bottom: 0;
    }
    
    /* Show More Link */
    .show-more-comments {
        text-align: center;
        margin-top: 20px;
    }
    
    .show-more-comments .thm-btn {
        padding: 8px 20px;
        font-size: 13px;
    }
    
    /* No Comments State */
    .no-comments {
        text-align: center;
        padding: 30px;
        color: #888;
    }
    
    .no-comments i {
        font-size: 36px;
        color: #ddd;
        margin-bottom: 10px;
        display: block;
    }
    
    .no-comments p {
        font-size: 13px;
        margin: 0;
    }
    
    /* Compact Main Comment Form */
    .comment-form {
        margin-top: 30px;
        padding-top: 25px;
        border-top: 1px solid #eee;
    }
    
    .comment-form__title {
        font-size: 18px;
        margin-bottom: 15px;
    }
    
    .comment-form__input-box {
        margin-bottom: 10px;
    }
    
    .comment-form__input-box input,
    .comment-form__input-box textarea {
        padding: 10px 12px;
        font-size: 13px;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 100%;
    }
    
    .comment-form__input-box textarea {
        min-height: 80px;
        resize: vertical;
    }
    
    .comment-form__btn {
        padding: 10px 20px;
        font-size: 13px;
    }
    
    /* Alert Messages */
    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 10px 12px;
        font-size: 13px;
        border-radius: 4px;
    }
    
    .alert-error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        padding: 10px 12px;
        font-size: 13px;
        border-radius: 4px;
    }
    
    .comment-highlight {
        animation: highlight 2s ease;
    }
    
    @keyframes highlight {
        0% { background: #fff3cd; }
        100% { background: transparent; }
    }
    
    /* Toast Notification */
    .toast-notification {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #333;
        color: white;
        padding: 12px 20px;
        border-radius: 6px;
        font-size: 13px;
        z-index: 9999;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }
    
    .toast-notification.show {
        opacity: 1;
        transform: translateY(0);
    }
    
    .toast-notification.success {
        background: #09cc7f;
    }
    
    .toast-notification.error {
        background: #c62828;
    }
    
    /* Mobile Responsive */
    @media (max-width: 768px) {
        .comment-one__header {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }
        
        .comment-one__single {
            gap: 10px;
        }
        
        .comment-one__image img {
            width: 40px;
            height: 40px;
        }
        
        .comment-one__meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 4px;
        }
        
        .unsend-btn {
            margin-left: 0;
            margin-top: 4px;
        }
        
        .comment-replies {
            margin-left: 0;
            padding-left: 10px;
        }
        
        .reply-item .comment-one__image img {
            width: 30px;
            height: 30px;
        }
        
        .reply-form-actions {
            flex-direction: column;
        }
        
        .reply-form-actions .thm-btn {
            width: 100%;
            text-align: center;
        }
    }
    
    @media (max-width: 480px) {
        .comment-one__image img {
            width: 35px;
            height: 35px;
        }
        
        .comment-one__meta h3 {
            font-size: 13px;
        }
        
        .comment-one__content > p {
            font-size: 12px;
        }
        
        .reply-btn {
            padding: 3px 10px;
            font-size: 11px;
        }
    }
</style>
@endpush

@section('content')
    @include('partials.header')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Start a Fundraising</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ url('donations') }}">Donations</a></li>
                    <li><span>/</span></li>
                    <li>Start a Fundraising</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

       <!--Donations Details Start-->
    <section class="donations-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="donation-details__left">
                        <div class="donation-details__top">
                            <div class="donation-details__top-img">
                                <img src="{{ asset('assets/images/resources/donation-details-img-3.jpg') }}" alt="Clean & Healthy Food Fundraising">
                                <div class="donation-details__category">
                                    <span>Food</span>
                                </div>
                            </div>
                            <div class="donation-details__top-progress-box clearfix">
                                <div class="donation-details__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="donation-details__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                                <div class="donation-details__top-donate-btn-box">
                                    <a href="{{ url('donate') }}" class="donate-btn footer-donate__btn">
                                        <i class="fa fa-heart"></i> Donate Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="donation-details__content">
                            <h3 class="donation-details__title">Raise Fund for Clean & Healthy Food</h3>
                            <p class="donation-details__text-1">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum.</p>
                            
                            <h3 class="donation-details__title">Summary</h3>
                            <p class="donation-details__text-2">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            
                            <ul class="list-unstyled donation-details__points">
                                <li>
                                    <div class="icon"><span class="icon-confirmation"></span></div>
                                    <div class="text"><p>Nsectetur cing do not elit.</p></div>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-confirmation"></span></div>
                                    <div class="text"><p>Suspendisse suscipit sagittis in leo.</p></div>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-confirmation"></span></div>
                                    <div class="text"><p>Entum estibulum dignissim posuere.</p></div>
                                </li>
                            </ul>
                            
                            <div class="donation-details__content-img-boxes">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="donation-details__content-img-single">
                                            <img src="{{ asset('assets/images/resources/donation-details-content-img-1.jpg') }}" alt="Food donation activity">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donation-details__content-img-single">
                                            <img src="{{ asset('assets/images/resources/donation-details-content-img-2.jpg') }}" alt="Community support">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="donation-details__text-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            
                            <div class="donation-details__presentation">
                                <div class="donation-details__presentation-icon-box">
                                    <span class="icon-pdf"></span>
                                    <h4>Our Presentation</h4>
                                </div>
                                <div class="donation-details__presentation-btn-box">
                                    <a href="{{ url('about') }}" class="thm-btn donation-details__presentation-btn">Download</a>
                                </div>
                            </div>
                        </div>
 <!-- Comments Section -->
@php
    $comments = $comments ?? collect();
    $commentCount = $comments->count();
@endphp

<div class="comment-one" id="commentsSection">
    <div class="comment-one__header">
        <h3 class="comment-one__title">
            <span id="commentCount">{{ $commentCount }}</span> Comments
        </h3>
        <div class="comment-sort">
            <select id="sortComments" class="form-select">
                <option value="newest">Newest First</option>
                <option value="oldest">Oldest First</option>
            </select>
        </div>
    </div>
    
    <div id="commentsList">
        @forelse($comments as $index => $comment)
            @php
                // Calculate if comment can be unsent (within 5 seconds)
                $canUnsend = $comment->created_at->diffInSeconds(now()) <= 5;
                $remainingSeconds = $canUnsend ? 5 - $comment->created_at->diffInSeconds(now()) : 0;
            @endphp
            
            <div class="comment-one__single {{ $index >= 10 ? 'hidden-comment' : '' }}" 
                 data-id="{{ $comment->id }}" 
                 data-created-at="{{ $comment->created_at->timestamp }}"
                 data-can-unsend="{{ $canUnsend ? 'true' : 'false' }}"
                 data-remaining-seconds="{{ $remainingSeconds }}">
                
                <div class="comment-one__image">
                    <img src="{{ asset($comment->user_avatar ?? 'assets/images/blog/comment-1-1.jpg') }}" 
                         alt="{{ $comment->name }}">
                </div>
                
                <div class="comment-one__content">
                    <div class="comment-one__meta">
                        <h3>{{ $comment->name }}</h3>
                        <span class="comment-date" data-timestamp="{{ $comment->created_at->timestamp }}">
                            {{ $comment->created_at->diffForHumans() }}
                        </span>
                        @if($canUnsend)
                            <button class="unsend-btn" data-comment-id="{{ $comment->id }}" data-remaining="{{ $remainingSeconds }}">
                                <i class="fa fa-undo"></i> Unsend <span class="unsend-countdown">{{ $remainingSeconds }}s</span>
                            </button>
                        @endif
                    </div>
                    
                    <p>{{ $comment->message }}</p>
                    
                    <button class="thm-btn comment-one__btn reply-btn" data-comment-id="{{ $comment->id }}">
                        <i class="fa fa-reply"></i> Reply
                    </button>
                    
                    <!-- Reply Form (Hidden by default) -->
                    <div class="reply-form-wrapper" id="replyForm-{{ $comment->id }}" style="display: none;">
                        <form class="reply-form" data-parent-id="{{ $comment->id }}">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-6">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <textarea name="message" placeholder="Write your reply..." required></textarea>
                            <div class="reply-form-actions">
                                <button type="submit" class="thm-btn">Post Reply</button>
                                <button type="button" class="thm-btn cancel-reply" style="background: #6c757d;">Cancel</button>
                            </div>
                        </form>
                    </div>

                    <!-- Nested Replies -->
                    @if($comment->replies && $comment->replies->count() > 0)
                        <div class="comment-replies">
                            @foreach($comment->replies as $reply)
                                <div class="comment-one__single reply-item" data-id="{{ $reply->id }}">
                                    <div class="comment-one__image">
                                        <img src="{{ asset($reply->user_avatar ?? 'assets/images/blog/comment-1-2.jpg') }}" 
                                             alt="{{ $reply->name }}">
                                    </div>
                                    <div class="comment-one__content">
                                        <div class="comment-one__meta">
                                            <h3>{{ $reply->name }}</h3>
                                            <span class="comment-date">{{ $reply->created_at->diffForHumans() }}</span>
                                        </div>
                                        <p>{{ $reply->message }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        @empty
            <div class="no-comments">
                <i class="fa fa-comments-o"></i>
                <p>No comments yet. Be the first to share your thoughts!</p>
            </div>
        @endforelse
    </div>

    @if($commentCount > 10)
        <div class="show-more-comments">
            <a href="#" id="showMoreComments" class="thm-btn" style="background: transparent; color: #e36955; border: 2px solid #e36955;">
                <i class="fa fa-comments"></i> Show <span id="hiddenCount">{{ $commentCount - 10 }}</span> More
            </a>
        </div>
    @endif
</div>
                        <!-- Main Comment Form -->
                        <div class="comment-form" id="commentForm">
                            <h3 class="comment-form__title">Leave a Comment</h3>
                            <div id="commentAlert" class="alert" style="display: none;"></div>
                            
                            <form id="mainCommentForm" action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="cause_id" value="1">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email Address" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a Comment" required></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn" id="submitComment">
                                                <span class="btn-text">Submit Comment</span>
                                                <span class="btn-loader" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-5">
                    <div class="donation-details__sidebar">
                        <!-- Organizer -->
                        <div class="donation-details__sidebar-single donation-details__organizer">
                            <div class="donation-details__organizer-img">
                                <img src="{{ asset('assets/images/resources/donation-details-organizer-img.jpg') }}" alt="Jessica Smith">
                            </div>
                            <div class="donation-details__organizer-content">
                                <p class="donation-details__organizer-date">Created 20 Oct, 2021</p>
                                <p class="donation-details__organizer-title">Organizer:</p>
                                <p class="donation-details__organizer-name">Jessica Smith</p>
                                <ul class="list-unstyled donation-details__organizer-list">
                                    <li>
                                        <div class="icon"><span class="fas fa-tag"></span></div>
                                        <div class="text"><p>Education</p></div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-map-marker-alt"></span></div>
                                        <div class="text"><p>Westwood, Canada</p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Recent Donations -->
                        <div class="donation-details__sidebar-single donation-details__recent-donation">
                            <h3 class="donation-details__recent-donation-title">Recent Donation</h3>
                            <ul class="list-unstyled donation-details__recent-donation-list">
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-1.jpg') }}" alt="David Marks">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$20</h4>
                                        <p class="donation-details__recent-donation-name">David Marks <span>3 hours ago</span></p>
                                        <p class="donation-details__recent-donation-text">God bless you dear</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-2.jpg') }}" alt="Sarah Albert">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$35</h4>
                                        <p class="donation-details__recent-donation-name">Sarah Albert <span>10 hours ago</span></p>
                                        <p class="donation-details__recent-donation-text">My prayers are with you</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-3.jpg') }}" alt="Anonymous">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$50</h4>
                                        <p class="donation-details__recent-donation-name">Anonymous <span>20 hours ago</span></p>
                                        <p class="donation-details__recent-donation-text">My prayers are with you</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-3.jpg') }}" alt="Anonymous">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$50</h4>
                                        <p class="donation-details__recent-donation-name">Anonymous <span>20 hours ago</span></p>
                                        <p class="donation-details__recent-donation-text">My prayers are with you</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-3.jpg') }}" alt="Anonymous">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$50</h4>
                                        <p class="donation-details__recent-donation-name">Anonymous <span>20 hours ago</span></p>
                                        <p class="donation-details__recent-donation-text">My prayers are with you</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-3.jpg') }}" alt="Anonymous">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$50</h4>
                                        <p class="donation-details__recent-donation-name">Anonymous <span>20 hours ago</span></p>
                                        <p class="donation-details__recent-donation-text">My prayers are with you</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-3.jpg') }}" alt="Anonymous">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$50</h4>
                                        <p class="donation-details__recent-donation-name">Anonymous <span>20 hours ago</span></p>
                                        <p class="donation-details__recent-donation-text">My prayers are with you</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-details__recent-donation-img">
                                        <img src="{{ asset('assets/images/resources/donation-details-recent-donation-img-4.jpg') }}" alt="Kistin Eve">
                                    </div>
                                    <div class="donation-details__recent-donation-content">
                                        <h4 class="donation-details__recent-donation-amount">$80</h4>
                                        <p class="donation-details__recent-donation-name">Kistin Eve <span>2 Days ago</span></p>
                                        <p class="donation-details__recent-donation-text">Wishing you blessings</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Share Cause -->
                        <div class="donation-details__sidebar-single donation-details__sidebar-share-cause">
                            <h3 class="donation-details__recent-donation-title">Share Our Causes!</h3>
                            <div class="donation-details__sidebar-shaare-cause-social">
                    <a href="https://wa.me/255759638296  " target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://youtube.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                    <a href="https://instagram.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="https://facebook.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook"></i></a>
                    <a href="https://tiktok.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donations Details End-->

    <!-- Toast Notification -->
    <div id="toast" class="toast-notification"></div>

    @include('partials.footer')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainForm = document.getElementById('mainCommentForm');
    const commentsList = document.getElementById('commentsList');
    const commentCount = document.getElementById('commentCount');
    const alertBox = document.getElementById('commentAlert');
    const showMoreBtn = document.getElementById('showMoreComments');
    const hiddenCountSpan = document.getElementById('hiddenCount');
    const toast = document.getElementById('toast');
    
    // Store unsend timers
    const unsendTimers = new Map();
    
    // Update timestamps every minute
    setInterval(updateTimestamps, 60000);
    
    // Initialize existing unsend buttons on page load
    document.querySelectorAll('.unsend-btn').forEach(btn => {
        const remaining = parseInt(btn.dataset.remaining) || 5;
        startUnsendTimer(btn, remaining);
    });
    
    // Handle main comment submission
    mainForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const submitBtn = document.getElementById('submitComment');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoader = submitBtn.querySelector('.btn-loader');
        
        submitBtn.disabled = true;
        btnText.style.display = 'none';
        btnLoader.style.display = 'inline-block';
        
        try {
            const formData = new FormData(mainForm);
            const response = await fetch(mainForm.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: formData
            });
            
            const data = await response.json();
            
            if (response.ok && data.success) {
                showToast('Comment posted! You can unsend it within 5 seconds.', 'success');
                mainForm.reset();
                const commentElement = addNewComment(data.comment);
                // Start timer for new comment
                const unsendBtn = commentElement.querySelector('.unsend-btn');
                if (unsendBtn) {
                    startUnsendTimer(unsendBtn, 5);
                }
                updateCommentCount(1);
            } else {
                throw new Error(data.message || 'Failed to post comment');
            }
        } catch (error) {
            showAlert(error.message, 'error');
        } finally {
            submitBtn.disabled = false;
            btnText.style.display = 'inline-block';
            btnLoader.style.display = 'none';
        }
    });
    
    // Handle reply button clicks
    document.addEventListener('click', function(e) {
        if (e.target.closest('.reply-btn')) {
            const btn = e.target.closest('.reply-btn');
            const commentId = btn.dataset.commentId;
            const replyForm = document.getElementById(`replyForm-${commentId}`);
            
            // Hide all other reply forms
            document.querySelectorAll('.reply-form-wrapper').forEach(form => {
                if (form !== replyForm) form.style.display = 'none';
            });
            
            // Toggle current form
            replyForm.style.display = replyForm.style.display === 'none' ? 'block' : 'none';
        }
        
        if (e.target.classList.contains('cancel-reply')) {
            e.target.closest('.reply-form-wrapper').style.display = 'none';
        }
    });
    
    // Handle unsend button clicks
    document.addEventListener('click', function(e) {
        if (e.target.closest('.unsend-btn')) {
            const btn = e.target.closest('.unsend-btn');
            const commentId = btn.dataset.commentId;
            unsendComment(commentId, btn);
        }
    });
    
    // Handle reply form submission
    document.addEventListener('submit', async function(e) {
        if (e.target.classList.contains('reply-form')) {
            e.preventDefault();
            
            const form = e.target;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Posting...';
            
            try {
                const formData = new FormData(form);
                formData.append('cause_id', '1');
                
                const response = await fetch('{{ route('comments.store') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                });
                
                const data = await response.json();
                
                if (response.ok && data.success) {
                    showToast('Reply posted!', 'success');
                    form.closest('.reply-form-wrapper').style.display = 'none';
                    form.reset();
                    addReplyToComment(form.dataset.parentId, data.comment);
                    updateCommentCount(1);
                } else {
                    throw new Error(data.message || 'Failed to post reply');
                }
            } catch (error) {
                showAlert(error.message, 'error');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        }
    });
    
    // Show more comments
    if (showMoreBtn) {
        showMoreBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const hiddenComments = document.querySelectorAll('.hidden-comment');
            
            hiddenComments.forEach((comment, index) => {
                if (index < 10) {
                    comment.classList.remove('hidden-comment');
                    comment.classList.add('comment-highlight');
                }
            });
            
            const remaining = document.querySelectorAll('.hidden-comment').length;
            if (remaining === 0) {
                this.parentElement.style.display = 'none';
            } else {
                hiddenCountSpan.textContent = remaining;
            }
        });
    }
    
    // Sort comments
    document.getElementById('sortComments').addEventListener('change', function() {
        const comments = Array.from(commentsList.children);
        const sortOrder = this.value;
        
        comments.sort((a, b) => {
            const timeA = parseInt(a.dataset.createdAt) || 0;
            const timeB = parseInt(b.dataset.createdAt) || 0;
            return sortOrder === 'newest' ? timeB - timeA : timeA - timeB;
        });
        
        comments.forEach(comment => commentsList.appendChild(comment));
    });
    
    // Unsend comment function
    async function unsendComment(commentId, btn) {
        // Clear timer immediately to prevent conflicts
        if (unsendTimers.has(commentId)) {
            clearInterval(unsendTimers.get(commentId));
            unsendTimers.delete(commentId);
        }
        
        try {
            const response = await fetch(`/comments/${commentId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                }
            });
            
            const data = await response.json();
            
            if (response.ok && data.success) {
                const commentEl = document.querySelector(`[data-id="${commentId}"]`);
                if (commentEl) {
                    commentEl.classList.add('unsent');
                    setTimeout(() => {
                        commentEl.remove();
                        updateCommentCount(-1);
                        showToast('Comment unsent successfully', 'success');
                        
                        // Check if no comments left
                        if (commentsList.children.length === 0) {
                            commentsList.innerHTML = `
                                <div class="no-comments">
                                    <i class="fa fa-comments-o"></i>
                                    <p>No comments yet. Be the first to share your thoughts!</p>
                                </div>
                            `;
                        }
                    }, 300);
                }
            } else {
                throw new Error(data.message || 'Failed to unsend');
            }
        } catch (error) {
            showToast(error.message, 'error');
        }
    }
    
    // Start unsend countdown timer - FIXED VERSION
    function startUnsendTimer(btn, seconds = 5) {
        if (!btn) {
            console.error('No button provided to startUnsendTimer');
            return;
        }
        
        const commentId = btn.dataset.commentId;
        const countdownSpan = btn.querySelector('.unsend-countdown');
        let remaining = seconds;
        
        // Clear existing timer for this comment
        if (unsendTimers.has(commentId)) {
            clearInterval(unsendTimers.get(commentId));
        }
        
        // Update display immediately
        if (countdownSpan) {
            countdownSpan.textContent = remaining + 's';
        }
        
        const timer = setInterval(() => {
            remaining--;
            
            if (countdownSpan) {
                countdownSpan.textContent = remaining + 's';
            }
            
            if (remaining <= 0) {
                clearInterval(timer);
                unsendTimers.delete(commentId);
                // Remove the button with animation
                btn.style.opacity = '0';
                setTimeout(() => {
                    btn.remove();
                }, 200);
            }
        }, 1000);
        
        unsendTimers.set(commentId, timer);
    }
    
    // Update all timestamps
    function updateTimestamps() {
        document.querySelectorAll('.comment-date').forEach(el => {
            const timestamp = parseInt(el.dataset.timestamp);
            if (timestamp) {
                el.textContent = formatTimeAgo(timestamp);
            }
        });
    }
    
    // Format timestamp to relative time
    function formatTimeAgo(timestamp) {
        const seconds = Math.floor((Date.now() / 1000) - timestamp);
        
        if (seconds < 60) return 'Just now';
        if (seconds < 3600) return Math.floor(seconds / 60) + ' min ago';
        if (seconds < 86400) return Math.floor(seconds / 3600) + ' hours ago';
        if (seconds < 604800) return Math.floor(seconds / 86400) + ' days ago';
        
        return new Date(timestamp * 1000).toLocaleDateString('en-US', { 
            month: 'short', 
            day: 'numeric', 
            year: 'numeric' 
        });
    }
    
    // Show toast notification
    function showToast(message, type = 'success') {
        toast.textContent = message;
        toast.className = `toast-notification ${type} show`;
        
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }
    
    // Show alert in form area
    function showAlert(message, type) {
        alertBox.className = `alert alert-${type}`;
        alertBox.textContent = message;
        alertBox.style.display = 'block';
        
        setTimeout(() => {
            alertBox.style.display = 'none';
        }, 5000);
    }
    
    // Add new comment to list - FIXED VERSION
    function addNewComment(comment) {
        // Remove "no comments" message if present
        const noComments = commentsList.querySelector('.no-comments');
        if (noComments) noComments.remove();
        
        const html = createCommentHTML(comment);
        commentsList.insertAdjacentHTML('afterbegin', html);
        
        const newComment = commentsList.firstElementChild;
        newComment.scrollIntoView({ behavior: 'smooth', block: 'center' });
        newComment.classList.add('comment-highlight');
        
        return newComment;
    }
    
    // Add reply to comment
    function addReplyToComment(parentId, reply) {
        const parentComment = document.querySelector(`[data-id="${parentId}"]`);
        if (!parentComment) return;
        
        let repliesContainer = parentComment.querySelector('.comment-replies');
        
        if (!repliesContainer) {
            repliesContainer = document.createElement('div');
            repliesContainer.className = 'comment-replies';
            parentComment.querySelector('.comment-one__content').appendChild(repliesContainer);
        }
        
        const html = createReplyHTML(reply);
        repliesContainer.insertAdjacentHTML('beforeend', html);
    }
    
    // Create HTML for new comment - FIXED VERSION
    function createCommentHTML(comment) {
        // Always include unsend button for new comments (they're always within 5 seconds)
        return `
            <div class="comment-one__single comment-highlight" 
                 data-id="${comment.id}" 
                 data-created-at="${Math.floor(Date.now() / 1000)}"
                 data-can-unsend="true">
                <div class="comment-one__image">
                    <img src="${comment.user_avatar || '{{ asset('assets/images/blog/comment-1-1.jpg') }}'}" alt="${comment.name}">
                </div>
                <div class="comment-one__content">
                    <div class="comment-one__meta">
                        <h3>${comment.name}</h3>
                        <span class="comment-date" data-timestamp="${Math.floor(Date.now() / 1000)}">Just now</span>
                        <button class="unsend-btn" data-comment-id="${comment.id}" data-remaining="5">
                            <i class="fa fa-undo"></i> Unsend <span class="unsend-countdown">5s</span>
                        </button>
                    </div>
                    <p>${comment.message}</p>
                    <button class="thm-btn comment-one__btn reply-btn" data-comment-id="${comment.id}">
                        <i class="fa fa-reply"></i> Reply
                    </button>
                    <div class="reply-form-wrapper" id="replyForm-${comment.id}" style="display: none;">
                        <form class="reply-form" data-parent-id="${comment.id}">
                            <input type="hidden" name="_token" value="${document.querySelector('input[name="_token"]').value}">
                            <input type="hidden" name="parent_id" value="${comment.id}">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-6">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <textarea name="message" placeholder="Write your reply..." required></textarea>
                            <div class="reply-form-actions">
                                <button type="submit" class="thm-btn">Post Reply</button>
                                <button type="button" class="thm-btn cancel-reply" style="background: #6c757d;">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        `;
    }
    
    // Create HTML for reply
    function createReplyHTML(reply) {
        return `
            <div class="comment-one__single reply-item comment-highlight" data-id="${reply.id}">
                <div class="comment-one__image">
                    <img src="${reply.user_avatar || '{{ asset('assets/images/blog/comment-1-2.jpg') }}'}" alt="${reply.name}">
                </div>
                <div class="comment-one__content">
                    <div class="comment-one__meta">
                        <h3>${reply.name}</h3>
                        <span class="comment-date">Just now</span>
                    </div>
                    <p>${reply.message}</p>
                </div>
            </div>
        `;
    }
    
    // Update comment count
    function updateCommentCount(change) {
        const current = parseInt(commentCount.textContent) || 0;
        commentCount.textContent = Math.max(0, current + change);
    }
});
</script>
@endpush