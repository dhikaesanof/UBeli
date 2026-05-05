<script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}">
</script>

<button id="pay-button">Pay!</button>

<script>
document.getElementById('pay-button').onclick = function () {
    snap.pay("{{ $snapToken }}");
};
</script>
