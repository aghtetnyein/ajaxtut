@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-8">
        <img src="\storage\{{ $post->image }}" class="w-100">
      </div>
      <div class="col-4 pt-3">
          <div class="col-12">
              <div class="d-flex align-items-center">
                  <div class="pr-3 col-5">
                      <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="">
                  </div>
                  <div class="col-7">
                      <div class="d-flex align-items-center pb-3 font-weight-bold">
                          <div class="pr-3">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="h4 text-dark">{{ $post->user->username }}</span>
                            </a>
                          </div>

                      </div>
                  </div>
              </div>

              <hr>

              <p style="font-size: 17px;">
                  {{ $post->caption }}
              </p>
          </div>
      </div>
  </div>
</div>
@endsection
