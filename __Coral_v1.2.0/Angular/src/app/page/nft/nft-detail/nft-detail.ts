import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { NftNavDark } from "../../../components/navbar/nft-nav-dark/nft-nav-dark";
import { Footer } from "../../../components/footer/footer";
import { nftData } from '../../../../data/data';

@Component({
  selector: 'app-nft-detail',
  imports: [
    CommonModule,
    RouterLink,
    NftNavDark,
    Footer
],
  templateUrl: './nft-detail.html',
  styleUrl: './nft-detail.scss'
})
export class NftDetail {
  nftData = nftData
  id:any;
  data:any;
  constructor(private route:ActivatedRoute){}

 ngOnInit(): void {
    this.id = this.route.snapshot.params['id'];
    this.data = this.nftData.find((item:any)=>item.id === parseInt(this.id));
  }
}
