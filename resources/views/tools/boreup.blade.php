@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4 p-md-5">

                    <h1 class="page-title">
                        🔥 Kalkulator Bore Up
                    </h1>

                    <p class="text-muted">
                        Bandingkan kapasitas mesin
                        sebelum dan sesudah bore up.
                    </p>


                    <div class="mb-3">

                        <label class="form-label">
                            Stroke (mm)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="stroke"
                            class="form-control"
                            placeholder="Contoh: 57.9">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Bore Lama (mm)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="boreLama"
                            class="form-control"
                            placeholder="Contoh: 50">

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Bore Baru (mm)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="boreBaru"
                            class="form-control"
                            placeholder="Contoh: 52">

                    </div>


                    <button
                        onclick="hitungBoreUp()"
                        class="btn btn-dark w-100">

                        🔥 Hitung Bore Up

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

function hitungCC(
    bore,
    stroke
) {

    return (
        Math.PI /
        4 *
        Math.pow(bore, 2) *
        stroke /
        1000
    );

}


function hitungBoreUp()
{

    const stroke =
        parseFloat(
            document.getElementById('stroke').value
        );

    const boreLama =
        parseFloat(
            document.getElementById('boreLama').value
        );

    const boreBaru =
        parseFloat(
            document.getElementById('boreBaru').value
        );


    if (
        !Number.isFinite(stroke) ||
        !Number.isFinite(boreLama) ||
        !Number.isFinite(boreBaru) ||
        stroke <= 0 ||
        boreLama <= 0 ||
        boreBaru <= 0
    ) {

        alert('Masukkan data dengan benar.');

        return;
    }


    const ccLama =
        hitungCC(
            boreLama,
            stroke
        );


    const ccBaru =
        hitungCC(
            boreBaru,
            stroke
        );


    const kenaikan =
        ccBaru - ccLama;


    const persen =
        (
            kenaikan /
            ccLama
        ) * 100;


    const hasil =
        document.getElementById('hasil');


    hasil.classList.remove('d-none');


    hasil.innerHTML = `

        <h5>Hasil</h5>

        <p>
            CC lama:
            <strong>
                ${ccLama.toFixed(2)} cc
            </strong>
        </p>

        <p>
            CC baru:
            <strong>
                ${ccBaru.toFixed(2)} cc
            </strong>
        </p>

        <p>
            Kenaikan:
            <strong>
                ${kenaikan.toFixed(2)} cc
            </strong>
        </p>

        <h4>
            ${persen.toFixed(2)}%
        </h4>

    `;
}

</script>

@endsection