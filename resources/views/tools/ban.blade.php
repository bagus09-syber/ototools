@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="page-title">
            🛞 Ukuran Ban Motor
        </h1>

        <p class="text-muted">
            Cari ukuran ban berdasarkan motor.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <input
                type="text"
                id="searchBan"
                class="form-control mb-4"
                placeholder="🔎 Cari motor...">


            <div class="table-responsive">

                <table class="table table-hover">

                    <thead>

                        <tr>

                            <th>Merk</th>
                            <th>Model</th>
                            <th>Tahun</th>
                            <th>Ban Depan</th>
                            <th>Ban Belakang</th>

                        </tr>

                    </thead>


                    <tbody id="banRows">

                        @forelse($motors as $motor)

                        <tr>

                            <td>
                                {{ $motor->merk }}
                            </td>

                            <td>
                                {{ $motor->model }}
                            </td>

                            <td>
                                {{ $motor->tahun ?? '-' }}
                            </td>

                            <td>
                                {{ $motor->ban_depan ?? '-' }}
                            </td>

                            <td>
                                {{ $motor->ban_belakang ?? '-' }}
                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="5"
                                class="text-center">

                                Belum ada data.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection


@section('script')

<script>

document
    .getElementById('searchBan')
    .addEventListener(
        'keyup',
        function ()
        {

            const keyword =
                this.value.toLowerCase();


            document
                .querySelectorAll(
                    '#banRows tr'
                )
                .forEach(
                    function (row)
                    {

                        const text =
                            row.innerText
                                .toLowerCase();


                        row.style.display =
                            text.includes(keyword)
                            ? ''
                            : 'none';

                    }
                );

        }
    );

</script>

@endsection