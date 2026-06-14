import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavlight } from "../../../components/navbar/nft-navlight/nft-navlight";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-upload-item',
  imports: [
    CommonModule,
    RouterLink,
    NftNavlight,
    Footer
],
  templateUrl: './upload-item.html',
  styleUrl: './upload-item.scss'
})
export class UploadItem {
 file:any

  handleChange(e:any){
    e.preventDefault();
    this.file = URL.createObjectURL(e.target.files[0])
  }
}
