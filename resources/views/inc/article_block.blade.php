<div class="col-md-6 d-flex" >
  <div style="position: relative; align-items: stretch; width:100%" class="d-flex row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">

      <strong class="d-inline-block mb-2 text-primary">{{ $article->getCategory()->title }}</strong>

      <h3 class="mb-0">{{ $article->title }}</h3>
      <div class="mb-1 text-muted">{{ $article->created_at->format('d.m.Y, Время: H:i') }}</div>
      <p class="card-text mb-auto">{{ mb_substr($article->text, 0, 200). '...'}}</p>
      <a href="{{ route('article', [$article->category->code, $article->id]) }}" class="pt-1 stretched-link">Продолжить чтение</a>

      <!-- <svg style="position:absolute; right:10%; bottom:10%;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
      </svg>
      <svg style="position:absolute; right:3%; bottom:10%;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg> -->

    </div>
    <!-- <div class="col-auto d-none border rounded d-lg-block">
      <svg class="bd-placeholder-img" width="150" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
        preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect  width="100%" height="100%" fill="#55595C"></rect>
        <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
      </svg>

    </div> -->
  </div>
</div>
