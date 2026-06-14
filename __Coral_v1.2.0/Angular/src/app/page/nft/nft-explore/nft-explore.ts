import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavlight } from "../../../components/navbar/nft-navlight/nft-navlight";
import { nftData } from '../../../../data/data';
import { Footer } from "../../../components/footer/footer";

interface Nft{
  id: number;
  image: string;
  client: string;
  name: string;
  value: string;
  item: string;
  tag: string;
}

@Component({
  selector: 'app-nft-explore',
  imports: [
    CommonModule,
    RouterLink,
    NftNavlight,
    Footer
],
  templateUrl: './nft-explore.html',
  styleUrl: './nft-explore.scss'
})
export class NftExplore {
  nftData:Nft[] = nftData
}
