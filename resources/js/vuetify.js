import Vuetify from 'vuetify/lib';

import { mdiAccountSearch, mdiAccount } from '@mdi/js'

window.vuetify = new Vuetify({
    icons: { //just import the icons and include the values
        iconfont: 'mdiSvg',
        values: {
            mdiAccount,
            mdiAccountSearch,
        },
    },
});
