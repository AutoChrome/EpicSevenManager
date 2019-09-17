{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('hero_id', 'Hero_id:') !!}
			{!! Form::text('hero_id') !!}
		</li>
		<li>
			{!! Form::label('level', 'Level:') !!}
			{!! Form::text('level') !!}
		</li>
		<li>
			{!! Form::label('awakened_level', 'Awakened_level:') !!}
			{!! Form::text('awakened_level') !!}
		</li>
		<li>
			{!! Form::label('attack', 'Attack:') !!}
			{!! Form::text('attack') !!}
		</li>
		<li>
			{!! Form::label('defense', 'Defense:') !!}
			{!! Form::text('defense') !!}
		</li>
		<li>
			{!! Form::label('health', 'Health:') !!}
			{!! Form::text('health') !!}
		</li>
		<li>
			{!! Form::label('speed', 'Speed:') !!}
			{!! Form::text('speed') !!}
		</li>
		<li>
			{!! Form::label('crit_chance', 'Crit_chance:') !!}
			{!! Form::text('crit_chance') !!}
		</li>
		<li>
			{!! Form::label('crit_damage', 'Crit_damage:') !!}
			{!! Form::text('crit_damage') !!}
		</li>
		<li>
			{!! Form::label('effectiveness', 'Effectiveness:') !!}
			{!! Form::text('effectiveness') !!}
		</li>
		<li>
			{!! Form::label('effect_resistance', 'Effect_resistance:') !!}
			{!! Form::text('effect_resistance') !!}
		</li>
		<li>
			{!! Form::label('dual_attack', 'Dual_attack:') !!}
			{!! Form::text('dual_attack') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}