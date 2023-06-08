<div class="col-md-6">
  <div class="card"
    style="width: 350px; min-height: 265px; margin-left: 100px; padding: 10px; margin-bottom: 150px; border-radius: 20px;">
    <div class="d-flex align-items-center" style="padding: 20px;">
      <img src="{{asset('img/'.$user->photo_profil)}}"
        style="border-radius: 100%; object-fit: cover; width: 80px; height: 80px;">
      <div class="text ms-3" style="color: #333333;">
        {{$user->username}}
      </div>
    </div>
    <div class=" container-fluid" style="margin-top: 50px; margin-bottom: 12px;">
      <div class="row">
        <div class="col-6" style="">
          <div class="card text" style="border: none;">
            <div class="text-end">Jawaban</div>
            <div class="text-end">{{count($user->answer)}}</div>
          </div>
        </div>
        <div class="col-6" style="">
          <div class="card text" style="border: none;">
            <div class="text">Terima Kasih</div>
            <div class="text">{{count($user->like)}}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex align-items-center">
      <div class="row">
        <div class="col">
          <div class="background-text pinda1 text"
            style="margin-top: 15px; margin-left: 20px; padding-left: 10px; padding-right: 10px; width: 270px; border-bottom: 1px solid #F59A35;">
            </i>Tentang Saya
          </div>
        </div>
        <div class="col">
          <div
            style="margin-top: 15px; margin-left: 20px; padding-left: 10px; padding-right: 10px; width: 270px; border-bottom: 1px solid #F59A35;">
            <h6 class="background-text pinda1 text">{{$user->aboutme}}</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="margin-top: 50px; margin-bottom: 12px;">
      <div class="row mt-2">
        <div class="col-6" style="">
          <div class="card text" style="border: none;">
            <div class="text-end"><a href="" data-bs-toggle="modal" data-bs-target="#ModalFollowing">
                <p>Mengikuti </p>
                <p>{{count($user->following)}}</p>
              </a></div>
          </div>
        </div>
        <div class="col-6" style="">
          <div class="card text" style="border: none;">
            <div class="text my-0"><a href="" data-bs-toggle="modal" data-bs-target="#ModalFollowers">
                <p>Diikuti</p>
                <p>{{count($user->follower)}}</p>
              </a></div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalFollowing" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mengikuti</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @foreach ($follows as $follow)
            <div class="row mb-2 d-flex align-items-center justify-content-center">
              <div class="col-2 d-flex align-items-center justify-content-center">
                <img src="{{asset('img/'.$follow->follower->photo_profil)}}"
                  style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
              </div>
              <div class="col-5 d-flex align-items-center justify-content-start">
                <a href="{{route('profile.user', ['user' => $follow->follower->id])}}"
                  style="color:black;">{{$follow->follower->username}}</a>
              </div>
              @if ($user->id == auth()->user()->id)
              <div class="col-5 d-flex align-items-center justify-content-center">
                <form action="{{route('unfollow',['user' => $follow->follower->id])}}" method="POST" class="pb-1">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="background-text pindah1 text"
                    style="background-color: #e0f1ff padding: 5px; border-radius: 50px; text-align: center; ">
                    <i class="fa-solid fa-user-minus" style="color: #F59A35;"></i> Batal Mengikuti
                  </button>
                </form>
              </div>
              @else
              <div class="col-5 d-flex align-items-center justify-content-center">
                <a href="{{route('profile.user', ['user' => $follow->follower->id])}}"
                  class="background-text pindah1 text"
                  style="background-color: #e0f1ff padding: 5px; border-radius: 50px; text-align: center; ">
                  <i class="fa-solid fa-user" style="color: #F59A35;"></i> Lihat Profil
                </a>
              </div>
              @endif
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalFollowers" tabindex=" -1" aria-labelledby="exampleModal2Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Diikuti</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @foreach ($followers as $follower)
            <div class="row mb-2 d-flex align-items-center justify-content-center">
              <div class="col-2 d-flex align-items-center justify-content-center">
                <img src="{{asset('img/'.$follower->user->photo_profil)}}"
                  style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
              </div>
              <div class="col-5 d-flex align-items-center justify-content-start">
                <a href="{{route('profile.user', ['user' => $follower->user->id])}}"
                  style="color:black;">{{$follower->user->username}}</a>
              </div>
              <div class="col-5 d-flex align-items-center justify-content-center">
                <a href="{{route('profile.user', ['user' => $follower->user->id])}}"
                  class="background-text pindah1 text"
                  style="background-color: #e0f1ff padding: 5px; border-radius: 50px; text-align: center; ">
                  <i class="fa-solid fa-user" style="color: #F59A35;"></i> Lihat Profil
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    @if ($user->id == auth()->user()->id)
    <div class=" d-flex align-items-center">
      <a href="{{route('edit.profile', ['user' => auth()->user()->id])}}">
        <div class="background-text pindah1 text"
          style="background-color: #e0f1ff; margin-top: 10px; margin-left: 20px; padding: 5px; width: 270px; border-radius: 50px; text-align: center; ">
          <i class="fa-solid fa-pen-to-square" style="color: #F59A35;"></i> Edit Profil
        </div>
      </a>
    </div>
    @else
    @if ($isFollowing)
    <div class=" d-flex align-items-center">
      <form action="{{route('unfollow',['user' => $user->id])}}" method="POST" class="pb-1">
        @csrf
        @method('DELETE')
        <button type="submit" class="background-text pindah1 text"
          style="background-color: #e0f1ff; margin-top: 10px; margin-left: 20px; padding: 5px; width: 270px; border-radius: 50px; text-align: center; ">
          <i class="fa-solid fa-user-minus" style="color: #F59A35;"></i> Batal Mengikuti
        </button>
      </form>
    </div>
    @else
    <div class=" d-flex align-items-center">
      <form action="{{route('follow')}}" method="POST" class="pb-1">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="follower_id" value="{{ $user->id }}">
        <button type="submit" class="background-text pindah1 text"
          style="background-color: #e0f1ff; margin-top: 10px; margin-left: 20px; padding: 5px; width: 270px; border-radius: 50px; text-align: center; ">
          <i class="fa-solid fa-user-plus" style="color: #F59A35;"></i> Mengikuti
        </button>
      </form>
    </div>
    @endif
    @endif
    <div class="d-flex align-items-center">
      <div class="background-text pinda1 text"
        style="margin-top: 15px; margin-left: 20px; padding-left: 10px; padding-right: 10px; width: 270px; border-bottom: 1px solid #F59A35;">
        </i> Keterangan</div>
    </div>
    <div class="d-flex align-items-center">
      <div class="background-text pinda1 text"
        style="margin-top: 10px; margin-left: 20px; padding-left: 10px; padding-right: 10px;"><i
          class="fa-solid fa-user" style="color: #F59A35;"></i> Tingkat: {{$user->jenjang}}</div>
    </div>
    <div class="d-flex align-items-center">
      <div class="background-text pinda1 text"
        style="margin-top: 10px; margin-left: 20px; padding-left: 10px; padding-right: 10px;"><i
          class="fa-solid fa-calendar-days" style="color: #F59A35;"></i> Bergabung: {{$user->created_at->isoFormat('D
        MMMM YYYY')}}</div>
    </div>
  </div>
</div>