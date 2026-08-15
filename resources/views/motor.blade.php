@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="page-title">
            🏍️ Database Motor
        </h1>

        <p class="text-muted">
            Cari data motor berdasarkan merk atau model.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <input
                type="text"
                id="searchMotor"
                class="form-control mb-4"
                placeholder="🔎 Cari motor...">


            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>

                            <th>Merk</th>
                            <th>Model</th>
                            <th>Tahun</th>
                            <th>CC</th>
                            <th>Bore</th>
                            <th>Stroke</th>

                        </tr>

                    </thead>


                    <tbody id="motorRows">

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
                                {{ $motor->cc ?? '-' }}
                            </td>

                            <td>
                                {{ $motor->bore ?? '-' }} mm
                            </td>

                            <td>
                                {{ $motor->stroke ?? '-' }} mm
                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="6"
                                class="text-center py-4">

                                Belum ada data motor.

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
    .getElementById('searchMotor')
    .addEventListener(
        'keyup',
        function ()
        {

            const keyword =
                this.value.toLowerCase();


            document
                .querySelectorAll(
                    '#motorRows tr'
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