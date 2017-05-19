import {ModuleWithProviders} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';

import {CariComponent} from './komponen/cari/cari.component';
import {TentangComponent} from './komponen/tentang/tentang.component';

const appRoutes: Routes = [
	{
		path:'',
		component:CariComponent
	},
	{
		path:'tentang',
		component:TentangComponent
	}
];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);