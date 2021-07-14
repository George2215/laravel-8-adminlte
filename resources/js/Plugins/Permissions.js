const Permissions = {};

Permissions.install = function(app, options){
    app.config.globalProperties.$permissions = {
        /**
         * [{ "name": "can create"}, {"name": "show own programs", "owner": 1}]
         * @param permissions
         * @returns {boolean}
         */
        can: (permissions = []) => {
            const user = app.config.globalProperties.$page.props.user;
            //console.log(user);
            if (user.roles[0].name === "Super-Admin") return true;

            let can = false;
            permissions.forEach(p => {
                const userHasPermission = user.permissions.find(_p => _p.name === p.name);
                if (userHasPermission) {
                    if (p.hasOwnProperty("owner")) {
                        if (p.owner === user.id) can = true;
                    } else {
                        can = true;
                    }
                }
            })
            return can;
        }
    }
}

export default Permissions;
