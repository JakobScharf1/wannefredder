import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioMasonryThree } from './portfolio-masonry-three';

describe('PortfolioMasonryThree', () => {
  let component: PortfolioMasonryThree;
  let fixture: ComponentFixture<PortfolioMasonryThree>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioMasonryThree]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioMasonryThree);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
