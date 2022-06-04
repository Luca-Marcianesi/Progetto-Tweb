<div>
    <h1 class="label-input2">Servizi Interni</h1>
    <div id="interni">
        <div>
        {{ Form::label('bagni', 'Bagni', ['class' => 'label-input']) }}
        {{ Form::number('bagni','bagni' ,false, ['class' => 'input', 'id' => 'bagni']) }}
        </div>
        <div>
        {{ Form::label('lavatrice', 'Lavatrice', ['class' => 'label-input']) }}
        {{ Form::checkbox('lavatrice','lavatrice', false,['class' => 'input', 'id' => 'lavatrice']) }}
        </div>
    </div>
    <h1 class="label-input2">Internet</h1>
    <div id="internet">
        <div>
        {{ Form::label('wi_fi', 'Router Wifi', ['class' => 'label-input']) }}
        {{ Form::checkbox('wi_fi', 'wi_fi',false,['class' => 'input', 'id' => 'wi_fi']) }}
        </div>
        <div>
        {{ Form::label('fibra', 'Fibra', ['class' => 'label-input']) }}
        {{ Form::checkbox('fibra', 'fibra',false,['class' => 'input', 'id' => 'fibra']) }}
        </div>
    </div>
    <h1 class="label-input2">Posizione</h1>
    <div id="posizione">
        <div>
        {{ Form::label('uni', 'Vicino Università', ['class' => 'label-input']) }}
        {{ Form::checkbox('uni','uni', false,['class' => 'input', 'id' => 'uni']) }}
        </div>
        <div>
        {{ Form::label('metro', 'Vicino alla metro', ['class' => 'label-input']) }}
        {{ Form::checkbox('metro', 'metro', false,['class' => 'input', 'id' => 'metro']) }}
        </div>
    </div>
    <h1 class="label-input2">Altro</h1>
    <div id="altro">
        <div>
        
        </div>
        <div>
        
        </div>
    </div>

</div>