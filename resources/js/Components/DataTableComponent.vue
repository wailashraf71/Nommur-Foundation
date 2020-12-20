<template>
    <div>
    <data-table
        :columns="columns"
        :url="url"
        :theme="theme"
        :translate="{ nextButton: 'Next', previousButton: 'Previous', placeholderSearch: 'Search'}"
    >
    </data-table>
    </div>
</template>
<script>
export default {
    props: {
        data: {},
        columns: {},
        theme: '',
        url: ''
    },
    components: {
    },
}
</script>
