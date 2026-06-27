<section class="container-btn-logout">
    <a class="btn-logout" href="{{ route('admin-logout') }}">
    <span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
            <polyline points="16 17 21 12 16 7" />
            <line x1="21" y1="12" x2="9" y2="12" />
        </svg>
    </span>
    <span>Logout</span>
</a>
</section>

{{-- <style>
    .container-btn-logout{
        width: 100%;
        bottom: 0;
        background-color:var(--base);
        border-top:1px solid var(--border);
        padding: 1rem 0 0 0;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top:0.5rem;
    }
    .btn-logout {
        width: max-content;
        padding: 0 1rem 0 0;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        justify-content: start;
        border: 1px solid transparent;
        border-radius: 5px;
    }

    .btn-logout:hover{
        border: 1px solid var(--border);
    }

    .btn-logout span:nth-child(1) {
        display: inline-flex;
        height: 3rem;
        aspect-ratio: 1/1;
        color: var(--danger);
        padding:12px;
    }

    .btn-logout span:nth-child(2) {
        font-family: var(--font-primary);
        font-weight: 900;
        color: var(--danger);
    }
</style> --}}
