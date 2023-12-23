@extends('layouts.template')

@section('content')
<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">1,504</div>
            <div class="cardName">Customers</div>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">80</div>
            <div class="cardName">Packages</div>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">284</div>
            <div class="cardName">On Progress</div>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">142</div>
            <div class="cardName">Ready</div>
        </div>
    </div>
</div>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Recent Orders</h2>
            <a href="#" class="btn">View All</a>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Package</td>
                    <td>Status</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Abdi Rabbani</td>
                    <td>IDR 25.000</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Ready</span></td>
                </tr>

                <tr>
                    <td>Naufal Aulia</td>
                    <td>IDR 50.000</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Fawaz Al Fajr</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                    <td>Abdi Rabbani</td>
                    <td>IDR 25.000</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Ready</span></td>
                </tr>

                <tr>
                    <td>Naufal Aulia</td>
                    <td>IDR 50.000</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Fawaz Al Fajr</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                    <td>Abdi Rabbani</td>
                    <td>IDR 25.000</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Ready</span></td>
                </tr>

                <tr>
                    <td>Naufal Aulia</td>
                    <td>IDR 50.000</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>Fawaz Al Fajr</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>

                
            </tbody>
        </table>
    </div>

    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Recent Customers</h2>
        </div>

        <table>
            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
