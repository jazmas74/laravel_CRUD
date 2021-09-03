<h1>新規作成</h1>
<a href="{{ route('member.index') }}">{{ __('一覧へ戻る') }}</a>
<form method="POST" action="{{route('member.store')}}">
    @csrf

    <div>
        <label for="form-name">名前</label>


{{--        //↓valueを追加して入力値を保持させます。--}}
        <input type="text" name="name" id="form-name" required value="{{old('name')}}">

        @error('name')
        {{$message}}
        @enderror

    </div>

    <div>
        <label for="form-tel">電話番号</label>

{{--        //↓valueを追加して入力値を保持させます。--}}
        <input type="tel" name="telephone" id="form-tel" value="{{old('telephone')}}">

        @error('telephone')
        {{$message}}
        @enderror

    </div>

    <div>

        <label for="form-email">メールアドレス</label>


        <input type="email" name="email" id="form-email" value="{{old('email')}}">

        @error('email')
        {{$message}}
        @enderror

    </div>

    <button type="submit">送信</button>

</form>
