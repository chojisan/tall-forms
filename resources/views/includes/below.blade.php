@if($field->below || $field->help || $errors->has($temp_key))
    <x-tall-attr :attr="$field->getAttr('below-wrapper')">
        @if($field->below)
            <x-tall-attr :attr="$field->getAttr('below')">
                {{ $field->below }}
            </x-tall-attr>
        @endif
        @if($field->help)
            <p class="{{ $this->getAttr('help') }}">
                {{ $field->help }}
            </p>
        @endif
        @if($field->type != 'file')
            @error($temp_key)
            <p class="{{ $this->getAttr('error') }}">
                {{ $field->errorMsg ?? $this->errorMessage($message) }}
            </p>
            @enderror
        @endif
    </x-tall-attr>
@endif
