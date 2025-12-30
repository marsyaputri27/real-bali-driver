@props(['t'])

<div class="t-card h-100">
  <div class="d-flex align-items-start justify-content-between gap-3">
    <div class="d-flex align-items-center gap-3">
      <div class="t-avatar">
        {{ strtoupper(substr($t->name, 0, 1)) }}
      </div>

      <div>
        <div class="t-name">{{ $t->name }}</div>
        <div class="t-meta">{{ $t->country ?? 'Guest' }}</div>
      </div>
    </div>

    <div class="t-rating">
      <span class="t-stars">
        @for($i=1; $i<=5; $i++)
          <span class="{{ $i <= (int)$t->rating ? 'on' : '' }}">★</span>
        @endfor
      </span>
      <span class="t-score">{{ $t->rating }}/5</span>
    </div>
  </div>

  <div class="t-msg">
    “{{ $t->message }}”
  </div>
</div>
