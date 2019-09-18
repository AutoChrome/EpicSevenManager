<template>
<div>

    <div class="form-group row">
        <div class="col-md-4 ml-3">
            <select v-model="first_stat">
                <option disabled selected value="">Please choose a stat</option>
                <option value="">-</option>
                <option value="attack" :disabled="second_stat == 'attack' || third_stat == 'attack' || fourth_stat == 'attack'">Attack</option>
                <option value="attack_percent" :disabled="second_stat == 'attack_percent' || third_stat == 'attack_percent' || fourth_stat == 'attack_percent'">Attack %</option>
                <option value="defense" :disabled="second_stat == 'defense' || third_stat == 'defense' || fourth_stat == 'defense'">Defense</option>
                <option value="defense_percent" :disabled="second_stat == 'defense_percent' || third_stat == 'defense_percent' || fourth_stat == 'health_percent'">Defense %</option>
                <option value="health" :disabled="second_stat == 'health' || third_stat == 'health' || fourth_stat == 'health'">Health</option>
                <option value="health_percent" :disabled="second_stat == 'health_percent' || third_stat == 'health_percent' || fourth_stat == 'health_percent'">Health %</option>
                <option value="speed" :disabled="second_stat == 'speed' || third_stat == 'speed' || fourth_stat == 'speed'">Speed</option>
                <option value="crit_chance" :disabled="second_stat == 'crit_chance' || third_stat == 'crit_chance' || fourth_stat == 'crit_chance'">Critical Chance</option>
                <option value="crit_damage" :disabled="second_stat == 'crit_damage' || third_stat == 'crit_damage' || fourth_stat == 'crit_damage'">Critical Damage</option>
                <option value="effectiveness" :disabled="second_stat == 'effectiveness' || third_stat == 'effectiveness' || fourth_stat == 'effectiveness'">Effectiveness</option>
                <option value="effect_resistance" :disabled="second_stat == 'effect_resistance' || third_stat == 'effect_resistance' || fourth_stat == 'effect_resistance'">Effect Resistance</option>
            </select>
            </div>
            <div class="col-md-1">
                    <input name="first_stat_amount" type="number"/>
            </div>
    </div>
    
    <div class="form-group row">
        <div class="col-md-4 ml-3">
            <select v-model="second_stat">
                <option disabled selected value="">Please choose a stat</option>
                <option value="">-</option>
                <option value="attack" :disabled="first_stat == 'attack' || third_stat == 'attack' || fourth_stat == 'attack'">Attack</option>
                <option value="attack_percent" :disabled="first_stat == 'attack_percent' || third_stat == 'attack_percent' || fourth_stat == 'attack_percent'">Attack %</option>
                <option value="defense" :disabled="first_stat == 'defense' || third_stat == 'defense' || fourth_stat == 'defense'">Defense</option>
                <option value="defense_percent" :disabled="first_stat == 'defense_percent' || third_stat == 'defense_percent' || fourth_stat == 'health_percent'">Defense %</option>
                <option value="health" :disabled="first_stat == 'health' || third_stat == 'health' || fourth_stat == 'health'">Health</option>
                <option value="health_percent" :disabled="first_stat == 'health_percent' || third_stat == 'health_percent' || fourth_stat == 'health_percent'">Health %</option>
                <option value="speed" :disabled="first_stat == 'speed' || third_stat == 'speed' || fourth_stat == 'speed'">Speed</option>
                <option value="crit_chance" :disabled="first_stat == 'crit_chance' || third_stat == 'crit_chance' || fourth_stat == 'crit_chance'">Critical Chance</option>
                <option value="crit_damage" :disabled="first_stat == 'crit_damage' || third_stat == 'crit_damage' || fourth_stat == 'crit_damage'">Critical Damage</option>
                <option value="effectiveness" :disabled="first_stat == 'effectiveness' || third_stat == 'effectiveness' || fourth_stat == 'effectiveness'">Effectiveness</option>
                <option value="effect_resistance" :disabled="first_stat == 'effect_resistance' || third_stat == 'effect_resistance' || fourth_stat == 'effect_resistance'">Effect Resistance</option>
            </select>
            </div>
            <div class="col-md-1">
                    <input name="second_stat_amount" type="number"/>
            </div>
    </div>
    
    <div class="form-group row">
        <div class="col-md-4 ml-3">
            <select v-model="third_stat">
                <option disabled selected value="">Please choose a stat</option>
                <option value="">-</option>
                <option value="attack" :disabled="first_stat == 'attack' || second_stat == 'attack' || fourth_stat == 'attack'">Attack</option>
                <option value="attack_percent" :disabled="first_stat == 'attack_percent' || second_stat == 'attack_percent' || fourth_stat == 'attack_percent'">Attack %</option>
                <option value="defense" :disabled="first_stat == 'defense' || second_stat == 'defense' || fourth_stat == 'defense'">Defense</option>
                <option value="defense_percent" :disabled="first_stat == 'defense_percent' || second_stat == 'defense_percent' || fourth_stat == 'health_percent'">Defense %</option>
                <option value="health" :disabled="first_stat == 'health' || second_stat == 'health' || fourth_stat == 'health'">Health</option>
                <option value="health_percent" :disabled="first_stat == 'health_percent' || second_stat == 'health_percent' || fourth_stat == 'health_percent'">Health %</option>
                <option value="speed" :disabled="first_stat == 'speed' || second_stat == 'speed' || fourth_stat == 'speed'">Speed</option>
                <option value="crit_chance" :disabled="first_stat == 'crit_chance' || second_stat == 'crit_chance' || fourth_stat == 'crit_chance'">Critical Chance</option>
                <option value="crit_damage" :disabled="first_stat == 'crit_damage' || second_stat == 'crit_damage' || fourth_stat == 'crit_damage'">Critical Damage</option>
                <option value="effectiveness" :disabled="first_stat == 'effectiveness' || second_stat == 'effectiveness' || fourth_stat == 'effectiveness'">Effectiveness</option>
                <option value="effect_resistance" :disabled="first_stat == 'effect_resistance' || second_stat == 'effect_resistance' || fourth_stat == 'effect_resistance'">Effect Resistance</option>
            </select>
            </div>
            <div class="col-md-1">
                    <input name="third_stat_amount" type="number"/>
            </div>
    </div>
    
    <div class="form-group row">
        <div class="col-md-4 ml-3">
            <select v-model="fourth_stat">
                <option disabled selected value="">Please choose a stat</option>
                <option value="">-</option>
                <option value="attack" :disabled="first_stat == 'attack' || second_stat == 'attack' || third_stat == 'attack'">Attack</option>
                <option value="attack_percent" :disabled="first_stat == 'attack_percent' || second_stat == 'attack_percent' || third_stat == 'attack_percent'">Attack %</option>
                <option value="defense" :disabled="first_stat == 'defense' || second_stat == 'defense' || third_stat == 'defense'">Defense</option>
                <option value="defense_percent" :disabled="first_stat == 'defense_percent' || second_stat == 'defense_percent' || third_stat == 'health_percent'">Defense %</option>
                <option value="health" :disabled="first_stat == 'health' || second_stat == 'health' || third_stat == 'health'">Health</option>
                <option value="health_percent" :disabled="first_stat == 'health_percent' || second_stat == 'health_percent' || third_stat == 'health_percent'">Health %</option>
                <option value="speed" :disabled="first_stat == 'speed' || second_stat == 'speed' || third_stat == 'speed'">Speed</option>
                <option value="crit_chance" :disabled="first_stat == 'crit_chance' || second_stat == 'crit_chance' || third_stat == 'crit_chance'">Critical Chance</option>
                <option value="crit_damage" :disabled="first_stat == 'crit_damage' || second_stat == 'crit_damage' || third_stat == 'crit_damage'">Critical Damage</option>
                <option value="effectiveness" :disabled="first_stat == 'effectiveness' || second_stat == 'effectiveness' || third_stat == 'effectiveness'">Effectiveness</option>
                <option value="effect_resistance" :disabled="first_stat == 'effect_resistance' || second_stat == 'effect_resistance' || third_stat == 'effect_resistance'">Effect Resistance</option>
            </select>
            </div>
            <div class="col-md-1">
                    <input name="fourth_stat_amount" type="number"/>
            </div>
    </div>
</div>
</template>

<script>
    export default{
        data(){
            return{
                first_stat:"",
                second_stat:"",
                third_stat:"",
                fourth_stat:"",
                options:[
                    {title:"Attack", value:"attack"},
                    {title:"Attack %", value:"attack_percent"},
                    {title:"Defense", value:"defense"},
                    {title:"Defense %", value:"defense_percent"},
                    {title:"Health", value:"health"},
                    {title:"Health %", value:"health_percent"},
                    {title:"Speed", value:"speed"},
                    {title:"Critical Chance", value:"crit_chance"},
                    {title:"Critical Damage", value:"crit_damage"},
                    {title:"Effectiveness", value:"effectiveness"},
                    {title:"Effect Resistance", value:"effect_resistance"},
                ]
            }
        }
    }
</script>