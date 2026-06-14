import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavlight } from "../../../components/navbar/nft-navlight/nft-navlight";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-profile-setting',
  imports: [
    CommonModule,
    RouterLink,
    NftNavlight,
    Footer
],
  templateUrl: './profile-setting.html',
  styleUrl: './profile-setting.scss'
})
export class ProfileSetting {
  file:any = 'assets/images/team/1.jpg'

  handleChange(e:any){
    e.preventDefault();
    this.file = URL.createObjectURL(e.target.files[0])
  }
}
