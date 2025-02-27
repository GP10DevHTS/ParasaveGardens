<section class="discount-banner text-white py-2">
    <div class="container-fluid">
        <div class="scrolling-text">
            <span class="text-danger fw-bold">🔥 Special Offer:</span> Stay <span class="text-warning fw-bold">5+
                nights</span> and get <span class="text-success fw-bold">10% OFF</span> – Pay
            <span class="text-warning fw-bold">$45 per night</span> instead of <del class="text-muted">$50</del>!
            <span class="text-danger fw-bold">🔥 Book Now & Save!</span>
        </div>
    </div>
</section>

<style>
    .discount-banner {
        background: #000;
        /* Black background */
        border-top: 4px solid red;
        border-bottom: 4px solid red;
        white-space: nowrap;
        overflow: hidden;
        font-size: 1.2rem;
    }

    .scrolling-text {
        display: inline-block;
        color: #fff;
        font-weight: bold;
        animation: scroll-left 15s linear infinite;
    }

    @keyframes scroll-left {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(-100%);
        }
    }
</style>
