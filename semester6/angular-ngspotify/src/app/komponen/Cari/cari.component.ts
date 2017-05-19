import { Component } from '@angular/core';
import {SpotifyService} from '../../services/spotify.service';

@Component({
  moduleId:module.id,
  selector: 'cari',
  templateUrl: `cari.component.html`
})
export class CariComponent  {
	cariStr:string;

constructor(private _spotifyService:SpotifyService){
	
}

	cariMusic(){
		this._spotifyService.cariMusic(this.cariStr).subscribe(res => {
			console.log(res);
		});
	
	}
}













