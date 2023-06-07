<div class="col-3">
    <div class="card rounded-4" style="width: 290px; min-height: 265px;">
        <div class="d-flex align-items-center" style="padding: 20px;">
            <img src="{{asset('img/'.auth()->user()->photo_profil)}}"
                style="border-radius: 100%; object-fit: cover; width: 80px; height: 80px;">
            <a href="{{route('profile.user', ['user' => auth()->user()->id])}}">
                <p class=" text ms-3" style="color: #333333;">
                    {{auth()->user()->username}}
                </p>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <div class="background-text pinda1 text"
                style="background-color: #e0f1ff; margin-top: 10px; margin-left: 20px; padding-left: 10px; padding-right: 10px;">
                <i class="fa-solid fa-question" style="color: #F59A35;"></i>&nbsp;{{count(auth()->user()->user)}}
                Question
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="background-text pindah1 text"
                style="background-color: #e0f1ff; margin-top: 10px; margin-left: 20px; padding-left: 10px; padding-right: 10px;">
                <i class="fa-solid fa-comment" style="color: #F59A35;"></i>&nbsp;{{count(auth()->user()->answer)}}
                Answer
            </div>
        </div>
    </div>
</div>