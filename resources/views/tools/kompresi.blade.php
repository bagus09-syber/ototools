@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4 p-md-5">

                    <h1 class="page-title">
                        ⚙️ Kalkulator Kompresi
                    </h1>

                    <p class="text-muted">
                        Hitung rasio kompresi statis mesin.
                    </p>


                    <div class="mb-3">

                        <label class="form-label">
                            Volume langkah / Swept Volume (cc)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="swept"
                            class="form-control"
                            placeholder="Contoh: 108">

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Volume ruang bakar (cc)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="clearance"
                            class="form-control"
                            placeholder="Contoh: 10">

                    </div>


                    <button
                        onclick="hitungKompresi()"
                        class="btn btn-dark w-100">

                        ⚙️ Hitung Kompresi

                    </button>


                    <div
                        id="hasil"
                        class="result-box mt-4 d-none">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


@section('script')

<script>

function hitungKompresi()
{

    const swept =
        parseFloat(
            document.getElementById('swept').value
        );

    const clearance =
        parseFloat(
            document.getElementById('clearance').value
        );


    if (
        !Number.isFinite(swept) ||
        !Number.isFinite(clearance) ||
        swept <= 0 ||
        clearance <= 0
    ) {

        alert('Masukkan data dengan benar.');

        return;
    }


    const compression =
        (
            swept +
            clearance
        ) /
        clearance;


    const hasil =
        document.getElementById('hasil');


    hasil.classList.remove('d-none');


    hasil.innerHTML = `

        <h5>Rasio Kompresi</h5>

        <h2 class="fw-bold">
            ${compression.toFixed(2)} : 1
        </h2>

        <hr>

        <p class="mb-0">

            Rumus:
            (Volume langkah + Volume ruang bakar)
            ÷ Volume ruang bakar

        </p>

    `;
}

</script>

@endsection