<form action="{{ route('baiviet.store') }}" method="post">
  @csrf
  <div>
    <label for="title">Tiêu đề:</label>
    <br>
    <input type="text" name="title">
  </div>
  <div>
    @error("title")
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
  <div>
    <label for="content">Nội dung:</label>
    <br>
    <textarea cols="25" rows="8" name="content"></textarea>
  </div>
  <div>
    @error("content")
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
  <div>
    <button type="submit">Đăng bài</button>
  </div>
</form>