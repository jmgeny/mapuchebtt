

<div class="form-group">
	{!! Form::label('name', 'Nombre del producto'); !!}
	{!! Form::text('name', null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('short', 'Descripcion corta'); !!}
	{!! Form::text('short', null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Descripcion completa'); !!}
	{!! Form::textarea('body', null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('image', 'Foto'); !!}
	{!! Form::file('image', null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
</div>