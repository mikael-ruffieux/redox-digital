<div class="navigation">
    <a class="btn btn-fa-white" href="{{$prev == false ? url()->previous() : route('contact.'.$prev)}}"><i class="fas fa-arrow-left"></i></a>
    @if($step == $steps)
    <button class="btn btn-fa-white" type="submit">
        Envoyer
    </button>
    @else
    <button class="btn btn-fa-white" type="submit">
        <i class="fas fa-arrow-right"></i>
    </button>
    <!--<small>ou appuyez sur "Enter".</small>-->
    @endif
</div>

<div class="slider">
    <h4>0{{$step}}/0{{$steps}}</h4>
    <ul>
        @for ($i = 1; $i < $steps ; $i ++)
        <li><a href="step-{{$i}}"><i class="fa{{$i === $step ? 's' : 'l'}} fa-circle"></i></a></li>
        @endfor
        <li><a href="summary"><i class="fa{{$i === $step ? 's' : 'l'}} fa-circle"></i></a></li>
    </ul>
</div>