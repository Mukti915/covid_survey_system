<style>
    ul li{
        display: inline;
    }
</style>
<h5>Search Result</h5>
<hr>
@if(!empty($result))
    @foreach($result as $value)

        <div class="section-20-box" style="padding: 2px 0;">
            <div class="section-20-box-icon-cont"><i class="fa fa-question-circle fa-2x"></i></div>
            <div class="section-20-box-text-cont">
                <h5>{{ $value->full_name }} - ( {{ $value->phone }} )</h5>
                <ul>
                    <li>Blood Group : {{ $value->blood_group }} ,</li>

                    <li>Address : {{ $value->address }} ,</li>
                </ul>
            </div>
        </div>
        <hr>
    @endforeach
@endif
