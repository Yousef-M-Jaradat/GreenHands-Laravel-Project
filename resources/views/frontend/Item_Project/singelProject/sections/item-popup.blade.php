
@extends('frontend.layouts.navsticky')
@section('content')
    <div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <form class="default-form" action="{{ route('store.item') }}" method="post" novalidate="novalidate">
                @csrf
                <div class="form-bg">
                    <div class="row clearfix">
                        <li>
                            <input type="hidden" name="project_id" value="{{ $id }}" required>

                        </li>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Name</p>
                                <input type="text" class="form-control" required="" aria-required="true"
                                    value="{{ $user->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Your Email</p>
                                <input type="email" class="form-control required email" required=""
                                    aria-required="true" value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Phone</p>
                                <input type="text" class="form-control" required="" name="phone"
                                    value="{{ $user->phone }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Address*</p>
                                <input type="text" name="address" placeholder="" required=""
                                    value="{{ $user->address }}">
                            </div>
                        </div>


                    </div>
                </div>

                <ul class="payment-option">

                    <h4>Choose Items for Donation:</h4>


                </ul>
                <div style="display: flex ;gap:7%" >
                        <div style="display: flex">
                            <div style="display: flex">
                                <input type="radio" class="form-check-input tree" name="donate_item" value="Tree" required
                                    style="display: inline-block">
                                <label class="form-check-label" style="margin-left: 7px"> Tree {{ $project->tree_type }}</label>
                            </div>
                            
                        </div>

                        <div style="display: flex">
                            <input type="radio" class="form-check-input fertilizer" name="donate_item" value="Fertilizer"
                                for="f" required>
                            <label class="form-check-label" style="margin-left: 7px">Fertilizer {{ $project->fertilizer }}</label>
                    
                        </div>


                        <div style="display: flex">
                            <input type="radio" class="form-check-input" name="donate_item" value="Equipments" required>
                            <label class="form-check-label" style="margin-left: 7px">Equipments {{ $project->equipments }}</label>
                        </div>
                </div>
                <br>
                
                <input type="number" class="form-check-input treebox" name="donate_itemNo"
                style="width: 200px;height:20px;dispaly:inline-block" placeholder="Enter number">


                <div class="center">

                    <button class="thm-btn sbmt-btn" type="submit">Donate Now</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var tree = document.getElementsByClassName("tree")[0]; // Assuming you want to select the first element with the "tree" class
        var treebox = document.getElementsByClassName("treebox")[0]; // Assuming you want to select the first element with the "treebox" class

        treebox.style.display = "none";

        tree.onclick = function() {
            treebox.style.display = 'block';
            fertilizerbox.style.display = 'box';
            
        };


        var fertilizer = document.getElementsByClassName("fertilizer")[0]; // Assuming you want to select the first element with the "tree" class
        var fertilizerbox = document.getElementsByClassName("treebox")[0]; // Assuming you want to select the first element with the "treebox" class


        fertilizer.onclick = function() {
            fertilizerbox.style.display = 'block';
            treebox.style.display = 'block';
        };
    </script>
@endsection
