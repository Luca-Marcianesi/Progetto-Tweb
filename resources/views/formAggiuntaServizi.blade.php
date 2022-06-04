<div>
    <h1 class="label-input2">Servizi Interni</h1>
    <div id="interni">
        <div>
        {{ Form::label('bagni', 'Bagni', ['class' => 'label-input']) }}
        {{ Form::number('bagni','bagni' ,false, ['class' => 'input', 'id' => 'bagni']) }}
        </div>
        
    </div>
    <h1 class="label-input2">Internet</h1>
    <div id="internet">
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
    </div>
    <h1 class="label-input2">Altro</h1>
    <div id="altro">
        <div>
        
        </div>
        <div>
        
        </div>
    </div>

</div>