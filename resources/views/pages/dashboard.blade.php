@extends('layouts.admin') @section('content')
<div class="row g-3 mb-5">
    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-itmes-center rounded"
        >
            <div>
                <h3 class="fs-2">720</h3>
                <p class="fs-5">Products</p>
            </div>
            <i
                class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"
            ></i>
        </div>
    </div>

    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-itmes-center rounded"
        >
            <div>
                <h3 class="fs-2">120</h3>
                <p class="fs-5">Sales</p>
            </div>
            <i
                class="fas fa-hand-holding fs-1 primary-text border rounded-full secondary-bg p-3"
            ></i>
        </div>
    </div>

    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-itmes-center rounded"
        >
            <div>
                <h3 class="fs-2">565</h3>
                <p class="fs-5">Delivery</p>
            </div>
            <i
                class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"
            ></i>
        </div>
    </div>

    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-itmes-center rounded"
        >
            <div>
                <h3 class="fs-2">15%</h3>
                <p class="fs-5">Increase</p>
            </div>
            <i
                class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"
            ></i>
        </div>
    </div>
</div>

<div class="row my-5">
    <h3 class="fs-4 mb-3">Recent Orders</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>AAA</td>
                    <td>AAA</td>
                    <td>AAA</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>AAA</td>
                    <td>AAA</td>
                    <td>AAA</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>AAA</td>
                    <td>AAA</td>
                    <td>AAA</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>AAA</td>
                    <td>AAA</td>
                    <td>AAA</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
