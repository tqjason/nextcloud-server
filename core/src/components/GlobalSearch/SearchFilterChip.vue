<template>
	<div class="chip">
		<span class="icon">
			<slot name="icon" />
			<span v-if="pretext.length"> {{ pretext }} : </span>
		</span>
		<span class="text">{{ text }}</span>
		<span class="close-icon" @click="deleteChip">
			<CloseIcon :size="16" />
		</span>
	</div>
</template>

<script>
import CloseIcon from 'vue-material-design-icons/CloseThick.vue'

export default {
	name: 'SearchFilterChip',
	components: {
		CloseIcon,
	},
	props: {
		text: String,
		pretext: String,
	},
	methods: {
		deleteChip() {
			this.$emit('delete', this.filter)
		},
	},
}
</script>

<style lang="scss" scoped>
.chip {
    display: flex;
    align-items: center;
    padding: 2px 4px;
    border: 1px solid var(--color-primary-element-light);
    border-radius: 20px;
    background-color: var(--color-primary-element-light);
    margin: 2px;
    font-size: 10px;
    font-weight: bolder;

    .icon {
        display: flex;
        align-items: center;
        padding-right: 5px;

        img {
            width: 20px;
            padding: 2px;
            border-radius: 20px;
        }
    }

    .text {
        margin: 0 2px;
    }

    .close-icon {
        cursor: pointer;

        :hover {
            border-radius: 4px;
            padding: 1px;
        }
    }
}
</style>
