import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { nftData } from '../../../data/data';

interface NftData{
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
  ],
  templateUrl: './nft-explore.html',
  styleUrl: './nft-explore.scss'
})
export class NftExplore {
  nftData:NftData[] = nftData.slice(0,8)


}
