<div class="navigation">
    <a class="btn btn-fa-white" href="{{$prev == false ? url()->previous() : route('contact.'.$prev)}}"><i class="fas fa-arrow-left"></i></a>
    @if($step == $steps)
    <button class="btn btn-fa-white" id="send-btn" type="submit" id="send-button">
        Envoyer
    </button>
    @else
    <button class="btn btn-fa-white" type="submit" id="send-button">
        <i class="fas fa-arrow-right"></i>
    </button>
        @if ($step === 1 || $step === 2)
        <small>ou appuyez sur "Enter".</small>
        @endif
    @endif
</div>

<div class="slider">
    <h4>0{{$step}}/0{{$steps}}</h4>
    <ul>
        @for ($i = 1; $i < $steps ; $i ++)
        <li><a class="nav-dot" href="step-{{$i}}" data-accessible={{$step >= $i ? "1" : "0"}}><i class="fa{{$i === $step ? 's' : 'l'}} fa-circle"></i></a></li>
        @endfor
        <li><a class="nav-dot" href="summary" data-accessible={{$step >= $i ? "1" : "0"}}><i class="fa{{$i === $step ? 's' : 'l'}} fa-circle"></i></a></li>
    </ul>
</div>