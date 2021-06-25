<div class="box-typical-body padding-panel">
	<div class="row">
		<div class="col-sm-9">
			<fieldset class="form-group {{ $errors->first('label', 'form-group-error') }}">
				<label for="label" class="form-label">
					{{ __('tautan::general.form.label.label') }}
					<span class="color-red">*</span>
				</label>
				<div class="form-control-wrapper">
					{!! Form::text('label', null, ['class' => 'form-control', 'autofocus', 'placeholder' => __('tautan::general.form.label.placeholder')]) !!}
					{!! $errors->first('label', '<span class="text-muted"><small>:message</small></span>') !!}
				</div>
			</fieldset>
			<fieldset class="form-group {{ $errors->first('url', 'form-group-error') }}">
				<label for="url" class="form-label">
					{{ __('tautan::general.form.url.label') }} 
					<span class="color-red">*</span>
				</label>
				<div class="form-control-wrapper">
					{!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => __('tautan::general.form.url.placeholder')]) !!}
					{!! $errors->first('url', '<span class="text-muted"><small>:message</small></span>') !!}
				</div>
			</fieldset>

			<fieldset class="form-group">
				<div class="form-control-wrapper">
					<div class="checkbox-toggle -large">
						{!! Form::checkbox('new_tab', 1, null, ['id' => 'new_tab']) !!}
						<label for="new_tab" class="form-label">
							{{ __('tautan::general.form.tab.label') }} 
						</label>
					</div>
					<p class="small">
						{!! __('tautan::general.form.tab.desc') !!}
					</p>
				</div>
			</fieldset>
			
		</div>
		<div class="col-sm-3">
	        <fieldset class="form-group {{ $errors->first('banner', 'form-group-error') }}">
				<label for="banner" class="form-label">
					{{ __('tautan::general.form.banner.label') }} 
					<span class="color-red">*</span>
				</label>
				<div class="fileinput fileinput-new" data-provides="fileinput">
					<div class="fileinput-new thumbnail" style="width: 200px; height: 100px;">
						@if(!isset($edit))
							<img data-src="holder.js/268x120/auto" alt="...">
						@else
							<img src="{{ viewImg($edit->banner) }}" alt="{{ $edit->judul }}">
						@endif
					</div>
					<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 100px;"></div>
					<div>
						<span class="btn btn-default btn-file">
							<span class="fileinput-new">{{ __('tautan::general.form.banner.select') }} </span>
							<span class="fileinput-exists">{{ __('tautan::general.form.banner.change') }} </span>
							{!! Form::file('banner', ['class' => 'form-control', 'accept' => 'image/*']) !!}
						</span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">{{ __('tautan::general.form.banner.remove') }} </a>
					</div>
					{!! $errors->first('banner', '<span class="text-muted"><small>:message</small></span>') !!}
				</div>
			</fieldset>
		</div>
	</div>
</div>