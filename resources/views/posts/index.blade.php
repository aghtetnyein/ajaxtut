@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
      <div class="row">
          <div class="col-4 pt-4 offset-2">
              <div class="col-8">
                  <div class="d-flex align-items-center">
                      <div class="pr-3">
                          <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="">
                      </div>
                      <div>
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

                  <p>
                      {{ $post->caption }}
                  </p>
              </div>
          </div>
      </div>
      <div class="row pb-5">
          <div class="col-8 offset-2">
            <a href="/p/{{ $post->id }}">
              <img src="\storage\{{ $post->image }}" class="w-100">
            </a>
          </div>
      </div>
    @endforeach
</div>
@endsection
