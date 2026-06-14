import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexNft } from './index-nft';

describe('IndexNft', () => {
  let component: IndexNft;
  let fixture: ComponentFixture<IndexNft>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexNft]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexNft);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
